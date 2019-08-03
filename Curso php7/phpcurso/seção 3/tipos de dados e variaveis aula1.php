<?php
//variaveis

$variavel = "nome"; // aceita qualquer tipo de tipagem
string $variavel = "Nome"; //so vai aceitar strings
int $vaiavel = 10; //so vai aceitar inteiros
float $variavel = 10.0 //so vai aceitar floats
//carmelCase, criar variavies onde a primeira letra e  minuscula e toda palavra nova tem a primeira letra maiuscula
//ex nomeSobrenome

unset($variavel); //unset limpa a variavel
isset($variavel); //ver se a variavel existe, usa isset no if.

//contatenação
//juntar duas variaveis ou duas string em uma só ex

string $nome = "joão";
string $sobreNome = "Limão";

echo $nome . $sobreNome; //O "." ponto é usado para fazer a contatenação. joaoLimão

//tipos de dados.
//no php temos 8 tipos de dados primitivos dividos em 3 grupos

//tipos basicos
int //inteiro
float //ponto flutuante
string //texto
bool //booleano True ou false(verdadeiro ou falso)

//compostos(array é objetos)

$frutas = array("Limão", "banana", "abacate");
echo $frutas[2] // resultado = abacate

$data = New date(); //istanciei a data e transformei em $data que agora e um objeto

$data.time();
//especiais (null é resource)
//null(nulo) != vazio, nulo é ausencia de valor, vazio significa que ela foi iniciada porém foi reservada

 
?>