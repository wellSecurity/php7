<?php
//interface serve para definir o que precisa ser declarado numa classe exemplo
//otimo para trabalhar em equipe já que vc define os requisitos
interface Veiculo {
    public function acelerar();
    public function freiar();
    public function trocarMarcha();

}

class Civic implements Veiculo {

}


$carro = new Civic(); //acontecerar um erro porque não segue as regras da interface

class Civic implements Veiculo {
    public function acelerar($velocidade) {
        echo "O carro acelerou";
    }

    public function freiar() {
        echo "O carro frenou";
    }

    public function trocarMarcha() {
        echo "O carro trocou a macha";
    }
}
?>