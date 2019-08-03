<?php
//metodo magico sempre vai começar com __(dois underline)

//metodo construtor é um metodo que quando ja instancia a classe ele já e chamado

class Endereco {
    private $Logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {
        $this->Longradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
}

$meuEndereco = New Endereco('rua saraiva', '123', 'santos');
?>