<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();


$result = $stmt->fetchALL(PDO::FETCH_ASSOC);

//var_dump($result);

foreach ($result as $row ) {
	foreach ($row as $key => $value) {
		echo $key.":".$value."<br/>";
	}

	echo "============================ <br/>";
}



echo 'Current PHP version: ' . phpversion();



?>