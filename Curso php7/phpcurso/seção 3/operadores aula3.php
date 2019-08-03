<?php
// associar = operadoras para

$nome = "João"; //criei a variavel joão
echo $joão. " E um nome comum"; //João E um nome Comum

$nome .= " e bonito"; // .= ele pega a variavel e junta com mais alguma coisa.

echo $nome; //João E um nome comum e bonito

$valorTotal = 0;

$valorTotal += 100; //Soma o antigo valor com 100
$valorTotal += 25; //Soma o antigo valor com 25

echo $valorTotal; //125

//operadores aritmeticos
// +, -, *, /, <, >, >=, <=, ==, ===

$a = 10;
$b = 5;
echo $a++ //11(adicionou mais um)
echo $b-- //9(subtraiu um)
echo $a + $b; //15(soma)
echo $a - $b; //5(subtração)
echo $a / $b; //2(divisão)
echo $a ** $b; //100000(elevação)
echo $a > $b; //bool(true) viu se era maior
echo $a < $b; //bool(false) viu se era menor
echo $a == 10;//boll(true) (==) compara os valores e diz se e verdadeiro ou falso
echo $a === 10.0;//boll(false) (===) tres sinais de iguais alem de comparar o valor compara o tipo de dado
?>