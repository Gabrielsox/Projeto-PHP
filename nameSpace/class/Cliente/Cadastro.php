<?php
namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda(){

		echo "Foi registrado a venda para o cliente".$this->getNome();
	}
}


?>