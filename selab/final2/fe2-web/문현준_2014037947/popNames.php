<?php
// 2014037947 소프트웨어학부 4학년 문현준
if (isset($_GET["type"])){
	$type = $_GET["type"];
	if($type != "list"){
		header("HTTP/1.1 400 Invalid Request");
		die("HTTP/1.1 400 Invalid Request - you passed in a wrong type parameter.");
	}
	nameList();
} else {
	ranks();
}

function nameList(){
	$names_array = array();
	
	// read 'ranks.txt' file, extract all the names, and fill the '$names_array' with the extracted names  
	// 'ranks.txt' file을 한줄 한줄 읽고, 모든 이름을 추출하여, 추출한 이름들로 '$names_array'를 채우시오
	
	$RANKS_FILE = "ranks.txt";
	$lines = file($RANKS_FILE);
	$names_array = array();
	for($i = 0; $i < count($lines); $i++) {
		// $lines = explode(" ", $lines);
		$names = explode(" ", $lines[$i]);
		// print($names[0]);
		// print "\n";
		array_push($names_array , $names[0]);
	}
	// print_r($names_array);


	
	if ($names_array) {
		// produce and emit all the names extracted from the 'ranks.txt' as an output in JSON data format   
		// 'ranks.txt'에서 추출한 모든 이름들을 JSON 데이터 형식으로 만들어 내보내시오
		header("Content-type: application/json");
		$jsonData = json_encode($names_array);
		print($jsonData);

	} else {
		header("HTTP/1.1 410 Gone");
		die("HTTP/1.1 410 Gone - There is no data!.");
	}
}

// ranks();
function ranks(){
	
	$name = get_parameter("name");
	// $name = "A";

	$ranks = "";
	// read 'ranks.txt' file, extract a line that contains a matching 'name' parameter value   
	// 'ranks.txt' file을 한줄 한줄 읽고, 'name' 매개변수의 값을 가진 줄(line)을 추출하시오
	$RANKS_FILE = "ranks.txt";
	$lines = file($RANKS_FILE);

	for ($i=0; $i < count($lines); $i++) { 
		$names = explode(" ", $lines[$i]);

		if($name === $names[0] ) {
			print $names[0] ."\n";
			for ($i=1; $i < count($names); $i++) { 
				// print($names[$i]) ."\n" ;
				$ranks .= $names[$i];
			}
		}
	}
	// print $ranks;

	if ($ranks) {
		// emit a retured ranking data from the 'generate_xml' function as an output in XML data format
		// 'generate_xml' 함수에서 반화하는 랭킹 데이터를 XML 데이터 형식으로 만들어 내보내시오
		generate_xml($ranks);

	} else {
		header("HTTP/1.1 410 Gone");
		die("HTTP/1.1 410 Gone - There is no data for this name/gender.");
	}
}


function generate_xml($ranks) {
	/* create and return an XML DOM data for the given set of rangkins ($ranks)
	 * for example, the data, "Scott 406 412 454 442 177 36 15 17 39 75 163", would produce the following XML:
	 * <ranks>
	 *    <rank year="1900">406</rank>
	 *    <rank year="1910">412</rank>
	 *    ...
	 * </ranks>
	 * Note that the year is from 1900 to 2000 and increasing by 10 for each record
	 *
	 * 주어진 랭킹 집합 ($ranks)에 대한 XML DOM 데이터를 생성하여 반환 하시오
	 * 예를 들어, "Scott 406 412 454 442 177 36 15 17 39 75 163" 데이터는 다음과 같은 XML을 생성함 :
	 * <ranks>
	 *    <rank year="1900">406</rank>
	 *    <rank year="1910">412</rank>
	 *    ...
	 * </ranks>
	 * 참고로 년도는 1900 에서 2000 까지 각 기록마다 10년씩 증가
	 */
	$xmlrank = new DOMDocument();
	$rank_tag = $xmlrank->createElement("baby");     # <baby>
	print "break\n" ;
	for ($i = 0 ; $i < 10 ; $i++) { 
		print "break\n" ;
		$year_tag = $xmlrank->createElement("rank");   # <rank>
		$year_tag->setAttribute("year=19{$i}0" , $ranks[$i]);
		print $ranks[0] ."\n" ;
		$rank_tag->appendChild($year_tag);
	}
	$rank_tag->setAttribute("year=2000" , $ranks[11]);
	$rank_tag->appendChild($rank_tag);
	return $rank_tag;

	// function generate_xml($line, $name, $gender) {
	// 	$xmldom = new DOMDocument();
	// 	$baby_tag = $xmldom->createElement("baby");     # <baby>
	// 	$baby_tag->setAttribute("name", $name);
	// 	$baby_tag->setAttribute("gender", $gender);
		
	// 	$year = 1890;
	// 	$tokens = explode(" ", $line);
	// 	for ($i = 2; $i < count($tokens); $i++) {
	// 		$rank_tag = $xmldom->createElement("rank");   # <rank>
	// 		$rank_tag->setAttribute("year", $year);
	// 		$rank_tag->appendChild($xmldom->createTextNode($tokens[$i]));
	// 		$baby_tag->appendChild($rank_tag);
	// 		$year += 10;
	// 	}
		
	// 	$xmldom->appendChild($baby_tag);
	// 	return $xmldom;
	// }
}

function get_parameter($name) {
	if (isset($_GET[$name])) {
		return $_GET[$name];
	} else {
		header("HTTP/1.1 400 Invalid Request");
		die("HTTP/1.1 400 Invalid Request - you forgot to pass a '$name' parameter.");
	}
}
?>