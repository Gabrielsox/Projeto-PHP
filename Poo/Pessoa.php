<?php

class Pessoa {
	
public $nome;//atributo

	public function falar() { //metodo
		return "o meu nome é: ".$this->nome;
	}
}

$gabriel = new Pessoa();
$gabriel->nome = "Gabriel Teixeia";
echo $gabriel->falar();


?>