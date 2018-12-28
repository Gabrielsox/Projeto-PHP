<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade' => '25'
));
array_push($pessoas, array(
	'nome'=>'Gabriel',
	'idade' => '26'
));

echo json_encode($pessoas);

echo "<hr/>";

$json = '[{"nome":"Jo\u00e3o","idade":"25"},{"nome":"Gabriel","idade":"26"}]';


$data = json_decode($json,true); // para ser array tem que usar true , se nao vira objeto.
var_dump($data);

?>