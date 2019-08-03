<?php
//função anonima são funções que não tem nomes ex

function test($CALLBACK) {
    $CALLBACK;
}

test(function() {
    echo "OLá mundo"; //aqui e uma função anonima
});

//outro exemplo e usar função anonima na variavel

$fn = function($a){
    echo "olá $a";
}

$fn("joão"); //olá joão

//user funcion 
//função sempre deve retorna um valor, se caso não retorna não é uma função é sim uma sub rotina
//a diferença entre o echo e o return e que com o return eu tenho uma liberdade, posso transforma a string em variavel
//subrotina

/*
    <?php

function ola() {
    

    echo "Olá Mundo";


}

ola();

?>
*/

//função

/*
<?php

function ola() {
    
    return "Olá Mundo";

}

echo ola(); //sem o echo ele não responderia nada

?>
*/

//salario

/*
<?php

function salario() {
    return 998.00;
}

echo "José recebe 3 salarios: ".(salario() * 3); //2994 se eu não tivesse usado o return ele iria retorna 0
?>
*/

?>