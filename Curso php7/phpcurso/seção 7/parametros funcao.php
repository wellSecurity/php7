<?php

function ola() {
    echo "Olá jose";
}

ola(); //Olá jose

function ola_($nome) {
    echo "Olá $nome";
}

ola_('antonio'); //Olá antonio 

function ola_mundo($nome, $periodo="Bom dia") { //o periodo eu defini como padrão mesmo que ninguem escreva nada ele irar responder bom dia

    echo "Olá $nome, $periodo"; 

}

ola_mundo("josé"); //Olá josé, Bom dia
ola_mundo("João", "Boa noite"); //Olá João, Boa noite 

#func_get_args retorna todos os argumentos passado no parametros ex
function arg() {
    $args = func_get_args();
    echo $args;
}

arg("joão", "maria", "josé"); //joão maria josé

?>