<?php 

abstract class Animal{

    public function falar(){


        return "Som";

    }

    public function mover(){


        return "Anda";

    }
} 

class Cachorro extends Animal{

    public function falar(){

        return "Late";

    }
}

class Gato extends Animal{

    public function falar(){

        return "Mia";

    }
}

class Passaro extends Animal{

    public function falar(){

        return "Canta";

    }

    public function mover(){

        return parent::mover().' e Voa ';

    }
}


$rex = new Cachorro();
echo '<hr>Cachorro:<br>';
echo $rex->falar().'<br>';
echo $rex->mover().'<br>';


$gato = new Gato();
echo '<hr>Gato:<br>';
echo $gato->falar().'<br>';
echo $gato->mover().'<br>';


$canarinho = new Passaro();
echo '<hr>Passaro:<br>';
echo $canarinho->falar().'<br>';
echo $canarinho->mover().'<br>';