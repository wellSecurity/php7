<?php
#switch case, é como varios if porém de uma maneira mais rapida quando ja sabemos os resultados
$diaDaSemana = date("w");

switch($diaDaSemana) { //captura o resultado
    case 0: //compara o resultado é ve ser e true
    echo "Domingo";
    break;

    case 1:
    echo "Segunda";
    break;

    case 2:
    echo "Terça";
    break;

    case 3:
    echo "Quarta";
    break;

    case 4:
    echo "Quinta";
    break;

    case 5:
    echo "Sexta";
    break;

    case 6:
    echo "Sabado";
    break;
}
?>