<?php
session_start();
//id session criar um id para o usuario que fica salva no proprio pc que dps de 20 minutos excluir e cria outro
//como se fosse um usuario temporario (cookie)
//session_id pode ser usado para conectar automaticamente ao site é recuperar tudo que ja tinha sido feita
echo session_id(); //mostra o id da session
//session_id('idddd'); //recupera o ID
session_regenerate_id();//cria um novo ID
session_destroy(); //destroi toda a sessão
?>