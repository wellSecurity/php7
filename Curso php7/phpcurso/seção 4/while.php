<?php
//uso o while quando eu não sei quantas vezes e nescessario a repetição

$condicao = TRUE;

while($condicao) {
    $n = rand(0,10);//randoriza os numeros de 0 á 10
    echo $n
    if($n === 3) {
        echo "Acertou o numero";
        $condicao = FALSE;
    }
}

//do while executa apenas uma vez mesmo a condição sendo falsa

$valor = 100;
$desconto = 0.9;

do {
    $valor *= $desconto;

}while($valor > 100);

?>