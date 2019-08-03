<?php
//valor

function ola($nome) {
    echo $nome;
}

ola("joão"); //o valor e joão

$a = 10;

function trocarValor($a) {
    $a = 50;
    return $a;
};

echo trocarValor($a); //50
echo "<br>";
echo $a; //10. O valor não foi alterado dentro da função foi criado a variavel a que so fica na funcão Relembre o escopo na seção 3

//passagem de parametro por referencia, ao inves de pegar o valor ele pega a referencia da variavel e edita ela
//usamos o E comercial(&) na frente do cifrão
//variavel global e quuando desejamos que a variavel seja vista de qualquer lugar
//variavel por referencia quando queremos modificar essa variavel

function trocarValor(&$a) {
    $a = 50;
    return $a;
};

echo trocarValor($a); //50
echo "<br>";
echo $a; //50, o valor foi alterado porque ele editou a variavel

//outro exemplo

$pessoa = array(
    "nome": "João";
    "idade": 20;
);

foreach ($pessoa as $value) {
    if(gettype($value) === "integer") $value += 10;
}

echo $pessoa['idade']; //20

foreach ($pessoa as &$value) {
    if(gettype($value) === "integer") $value += 10;
}

echo $pessoa['idade']; //30
//se não for usado o "&" ele so vai alterar enquanto tiver dentro da função
?>