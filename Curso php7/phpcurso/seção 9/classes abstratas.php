<?php
//classe abstratas é igual interface a diferença e que na classe abstrata definimos o metodo
//a diferença entre classe abstratas e classe normal e que não podemos instanciar a classe abstrata

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade) {
        echo "O carro acelerou ". $velocidade. "Km";
    }

    public function freiar() {
        echo "O carro frenou";
    }

    public function trocarMarcha() {
        echo "O carro trocou a macha";
    }
}


class Civic extends Automovel {
    public function Logo(){
        echo "Logo da civic";
    }
}

$civic = New Civic();

$civic->acelerar(200);// O carro acelerou 200km
?>