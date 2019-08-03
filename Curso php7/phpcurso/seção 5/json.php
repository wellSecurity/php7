<?php
//json uma notação que facilita a integração de sistema substituindo o xml, ele transforma arrays em json

$pessoa = array(
    "nome" => "joao",
    'idade' => 20,
); //array
print_r($pessoa); // Array ( [nome] => joao [idade] => 20 )
echo($pessoa['nome']); //joao

//encode json
echo json_encode($pessoa); //{"nome":"joao","idade":20} o resultado é dado em json podendo interagir com qualquer outra linguaguem que usam json

//decode json

$json = '[{"nome":"joao","idade":20}]';

$dados = json_decode($json, true);
print_r($dados); //retorna o array  Array ( [nome] => joao [idade] => 20 )
?>