<?php

require_once("config.php");



// deletando usuario (delete)
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;

//atualizando usuario (update)
//$usuario = new Usuario();
//$usuario->loadById(7);
//$usuario->update("update", "deuCerto");
//echo $usuario;

//criando um usuario (insert)
//$aluno = new Usuario("aluno1","@aluno1");
//$aluno->insert();
//echo $aluno;


//CARREGA USUARIOS USANDO O LOGIN E A SENHA
/*
$usuario = new Usuario();
$usuario->login("Jose","1234567890");

echo $usuario;

/*
//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
$search = Usuario::search("ro");
echo json_encode($search);


//carrega uma lista de usuarios
$lista = Usuario::getList(); //metodo getlist é static então da pra chamar direto
echo json_encode($lista);
*/

/*
// traz um unico usuario
$teste = new Usuario();

$teste->loadById(3);

echo $teste; //utiliza o metodo tostring 
*/

//traz todos os usuarios
/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


?>