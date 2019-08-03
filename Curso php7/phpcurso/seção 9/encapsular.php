<?php
//encapsular(proteger, controlar)

class Pessoa {

    public $nome = "João"; //publico, qualquer um ver
    protected $idade = 48; //protegido, os herdeiros ver
    private $senha = "qwerty"; //privado, nem os herdeiros acessam apenas a propria classe

    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }
}   
//herdeiros
class Programador extends Pessoa {
    public function verDados() {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Programador();

// echo $objeto->idade. "<br/>";
$objeto->verDados();

?>