<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo() {

        return $this->$modelo;

    }

    public function setModelo($modelo) {

        $this->modelo = $modelo;

    }

    public function getMotor() {
        return $this->motor;
    }

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function getAno() {
        return $this->ano; 
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function exibir() {
        return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno(),
        )
    }
}

$gol = new Carro(); //instanciei

$gol->setModelo("Gol GT");//defini o modelo do carro
$gol->setMotor("1.6");//defini o motor
$gol->setAno("2017");//defini o ano

print_r($gol->exibir());
?>