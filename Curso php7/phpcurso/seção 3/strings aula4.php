<?php
//interpolação de variavel

$nome = "joão";
echo "nome: $nome"; //nome: joão
echo 'nome: $nome'; //nome: $nome

//funções na variavel
//strtoupper deixar maiscula
$nome = "joão";
echo strtoupper($nome);//Deixa a variavel toda em maiuscula. JOÃO

//strtolower deixar minuscula
$nome = "JOÃO";
echo strtolower($nome);//Deixa a variavel toda em minuscula. joão

//ucfirst deixa a primeira letra maiuscula
$nome = "joão";
echo ucfirst($nome); //João

//ucwords Deixa a primeira letra de cada palavra em maiucula
$nome = "joão marinho";
echo ucwords($nome); //João Marinho

//str_replace substituir strings ex

$empresa = "Google";

echo str_replace("o", "0", $empresa) //G00gle
//strlen conta a quantidade de letras numa string

$palavra = "mãe";
echo strlen($palavra) //3
?>