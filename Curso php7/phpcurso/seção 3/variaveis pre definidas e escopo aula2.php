<?php

//variaveis pre-definidas (algumas) normalmente variaveis pre-definidas começam com $_
$_GET;
$_POST;
$_SERVER;
$_SESSION;
$_REQUEST;

/*Escopo.
Escopo e ate onde sua variavel pode chegar
O que acontece na função fica na função kkkk

$nome = "joão"; 

function test() {
    echo $nome; //a variavel nome não alcança as funções
}

test(); //A resposta e null
agora se eu fazer 

global $nome = "João";

function test() {
    echo $nome;
}

test(); //A resposta é João

*/
?>