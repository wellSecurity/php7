<?php

//metodo estatico serve para pode chamar metodos sem instancia a class
class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

}

$cpf = new Documento();
$cpf->setNumero("12345678901");

var_dump($cpf->getNumero());


?>