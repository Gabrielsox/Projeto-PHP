<?php


$conn =  new mysqli("localhost","root","","dbphp7");

if ($conn->connect_error) { // verificar se ouve algum erro na conexão com banco
	echo "Error: ".$conn->connect_error;
}

/*
// inserindo 
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");

$login = "user";
$pass = "12345";

$stmt->bind_param("ss",$login,$pass);// os 2 ss significa dois paramnetros do tipo de valor ex: string =s , int = i

$stmt-> execute();
*/

//consulta

$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array(); // será utilizado para gerar um json
while ($row = $result->fetch_assoc()) {
	array_push($data, $row); //passando valores das linhas para array;
}

echo json_encode($data);

?>