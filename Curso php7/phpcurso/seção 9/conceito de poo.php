<?php
//classes(class), parte princial em POO, são assuntos que são feitos para organizar o codigo
//uma classe e um conjunto de atributos(uma especie de variavel) e metodos(função/subrotina)


//Objeto, instancia
//objeto é uma variavel que cria uma copia da classe(uma variavel que representa uma classe)

//$dt = New DateTime(); //criamos o objeto, Utilizamos o New para instancia a classe

//criando uma classe
//toda classe vai começar com letra maiuscula, se ela for nome composto os proximos nomes também começaram com maiuscula

class Pessoa {

    public $nome;//atributo

    public function falar() {//Método
        
        return "O meu nome é ".$this->nome; //this e a representação da classe ja instancia, um objeto

    }
}

$fernando = New Pessoa(); //instancie a classe e criei um objeto
$fernando->nome = "fernando"; //Eu defini o atributo nome como fernando
echo $fernando->falar();//Chamei o Método
?>