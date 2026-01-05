<!-- Exercice 4 : Utilisation d’une interface comme type
Créez une interface « Animal » avec une méthode « crier() ».
Ensuite, créez deux classes « Chien » et « Chat » qui implémentent l’interface « Animal ».
Créez une fonction « faireCrier() » qui prend en paramètre un objet de type « Animal » et 
appelle la méthode « crier() ».
Testez cette fonction en lui passant à la fois un objet « Chien » et un objet « Chat » -->


<?php

interface Animal {

    public function crier();
}

class chien implements Animal{

     public function crier(): string{
        return " le chien crie";
     }

}

class chat implements Animal{
     public function crier(): string{
        return " le chat crie ";
     }

}

function faireCrier(Animal $animal) {
    echo $animal->crier();
}


$chien = new Chien();
$chat = new Chat();

faireCrier($chien);
echo "<br>";
faireCrier($chat);


