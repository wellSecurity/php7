<?php
//polimorfismo ter metodos com o mesmo nome na classe pai e filho com funções diferentes
 
abstract class Animal {
    public function falar() {

        return "Som";

    }
    public function mover() {
        
        return "Andar";

    }
}

class Cachorro extends Animal {

    public function falar() {
        return "Late";
    }

}

class Gato extends Animal {
    public function falar() {
        return "Mia";
    }
}

class Passaro extends Animal {
    public function falar() {
        return "Canta";
    }
    public function mover() {
        return "Voa é" . parent::mover(); //chamou a função mover estaticamente
    }
}
$tom = New Gato();
$pluto = New Cachorro();
$passaro New Passaro();

echo $tom->falar() . "<br/>";//Mia
echo $tom->mover() . "<br/>";//Andar

echo $pluto->falar() . "<br/>"; //Late
echo $pluto->andar() . "<br/>"; //Andar

echo $passaro->falar() . "<br/>";//Canta
echo $passaro->andar() . "<br/>";//Voa é Andar

?>