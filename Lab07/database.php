<!DOCTYPE html>
<html>
<head>
</head>

<body>
<?php
    $dbname = $_POST["databaseName"];
    $user = $_POST["username"];
    $password = $_POST["password"];
    $query = $_POST["query"];
?>
<br>
<?php
// echo $dbname;
// echo $user;
// echo $password;
?>
<br>
<?php
$dsn = "mysql:host=localhost;port=3306;dbname=$dbname;charset=utf8"; 
#data source name = dbprogram: dbname = [dbname]; host=[host type]; port=[portnum];


try {
    $imdb = new PDO($dsn,$user,$password);
    $imdb->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); 
    $imdb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "$dbname 데이터베이스 연결 성공!!<br/>";
    $stmt = $imdb->query($query);
    foreach ($rows as $row){ ?>
            <li> ID: <?php echo $row["id"]; ?> </li>
            <li> name : <?php echo $row["name"]; ?> </li>
        <?php } ?>
    <?php
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
    </body>
</html>