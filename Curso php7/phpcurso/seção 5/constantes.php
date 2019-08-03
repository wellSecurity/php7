<?php
//constante á constante no php e utilizando define ex.

define("SERVIDOR", "127.0.0.1"); //definimos a constante servidor como 127.0.0.1

echo SERVIDOR; //as constantes não utiliza o $ na frente


define("BANCO_DE_DADOS", [
    'HOST' => '127.0.0.1',
    'DB' => 'usuarios',
    'ROOT' => 'root',
    'pass' => 'qwerty',
    ]); //criamos um array que pode ser feito apenas usando colchetes ao inves de array()

?>