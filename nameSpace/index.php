<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad -> setNome("gabriel");
$cad -> setEmail("gabriel@gabriel.com");
$cad -> setSenha("123456");

$cad->registrarVenda();


?>