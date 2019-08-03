<?php
//array 
$frutas = array("laranja", "abacaxi", "melancia"); //array é uma especie de lista

print_r($frutas) //exibi os arrays e os locais dele ex [0] => laranja

//array bidimensional (arrays que precisam de duas indices)

$carros[0][0] = "Ford";
$carros[0][1] = "Fiesta";

$carros[1][0] = "Volvo"; 
$carro[1][1] = "camaro"; //non-sense mesmo
//eu defini que o primeiro array é o a produtora do carro é o segundo é o carro

$pessoa = array();

array_push($pessoa, array (
    'nome'=> 'João', //a chave cria um objeto ao inves de utilizar um numero para chamar eu posso chamar pela string nome
    'idade'=> 20,
));
array_push($pessoa, array(
    'nome'=> 'Glauco',
    'idade'=>25,
));

print_r($pessoa[0]['nome']); //João, isso chamaria a primeira pessoa(0) é a segunda o nome
?>