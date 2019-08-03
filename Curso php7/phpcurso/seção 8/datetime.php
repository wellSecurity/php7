<?php
//agora iremos utilizar o datetime e orientação a objetos

$dt = New DateTime(); //instanciei a classe usando a palavra reservada New a variavel virou um objeto

echo $dt->format("d/m/Y H:i:s"); //utilizamos o "->" para acessar o metodo da classe

?>