<?php

class Documento {
    
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($n) {
        $this->numero = $n;
    }
}


class CPF extends Documento {
    public function validar():bool {
        //validação do CPF
        $numeroCPF = $this->getNumero();
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("11111111111");
var_dump($doc->validar());
?>