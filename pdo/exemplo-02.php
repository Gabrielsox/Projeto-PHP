<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

//inserindo dados
/* 
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Jose";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);


$stmt->execute();

echo("INSERIDO OK");
*/

//alterando
/*
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Jose";
$password = "1234567890";
$id = 1;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo("alterado OK");
*/

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo("delete OK");



?>