<?php
$BOOKS_FILE = "books.txt";

function filter_chars($str) {
	return preg_replace("/[^A-Za-z0-9_]*/", "", $str);
}

if (!isset($_SERVER["REQUEST_METHOD"]) || $_SERVER["REQUEST_METHOD"] != "GET") {
	header("HTTP/1.1 400 Invalid Request");
	die("ERROR 400: Invalid request - This service accepts only GET requests.");
}

$category = "";
$delay = 0;

if (isset($_REQUEST["category"])) {
	$category = filter_chars($_REQUEST["category"]);
}
if (isset($_REQUEST["delay"])) {
	$delay = max(0, min(60, (int) filter_chars($_REQUEST["delay"])));
}

if ($delay > 0) {
	sleep($delay);
}

if (!file_exists($BOOKS_FILE)) {
	header("HTTP/1.1 500 Server Error");
	die("ERROR 500: Server error - Unable to read input file: $BOOKS_FILE");
}

header("Content-type: application/json");

$bookInfo = "";
print "{\n  \"books\": [\n";
$lines = file($BOOKS_FILE);
for ($i=0; $i < count($lines); $i++) { 
	list($title, $author, $book_category, $year, $price) = explode("|", trim($lines[$i]));
	// print "{\"category\": \"$book_category\", \"title\": \"$title\", \"author\": \"$author\", \"year\": $year, \"price\": $price }\n";

	if ($book_category == $category) {
		$bookInfo .= "{\"category\": \"$book_category\", \"title\": \"$title\", \"author\": \"$author\", \"year\": $year, \"price\": $price },\n";
		// $booksObject->title = $title;
		// $booksObject->author = $author;
		// $booksObject->book_category = $book_category;
		// $booksObject->year = $year;
		// $booksObject->price = $price;

		// array_push($bookArr, $booksObject);
		// $myJson = json_encode($bookArr);
		// echo $myJson;
	}
}
// $bookInfo = substr_replace($bookInfo,'', -2);
$bookInfo = substr($bookInfo,0, -2);
print $bookInfo;
// write a code to : 
// 1. read the "books.txt"
// 2. search all the books that matches the given category 
// 3. generate the result in JSON data format 
print "  ]\n}\n";
?>
