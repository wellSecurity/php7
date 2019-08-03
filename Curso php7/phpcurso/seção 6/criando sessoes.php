<?php
session_start(); //iniciando sessão. a session sempre deve ser primeiro antes de todo o codigo html ou php

//sessoes
//variavies de sessões variaveis de sessão diferente de variaveis normais que so funcionam na pagina ou por meio de inclusão.
//a variavel de sessões ela e como uma global que deixa salva na maquina cliente, a variavel de sessão dura normalmente 20 minutos

$_SESSION['nome'] = "wellington" //$_SESSION é como um array super global onde podemos acessar de qualquer parte do site que iniciou a sessão
//acesse o arquivo session
?>