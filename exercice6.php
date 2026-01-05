<!-- Exercice 3 : Héritage multiple d’interfaces
Créez une interface « Nageur » avec une méthode « nager() ». Créez également une 
interface « Voleur » avec une méthode « voler() ».
Ensuite, créez une classe « SuperHero » qui implémente à la fois « Nageur » et l’interface 
« Voleur » en fournissant une implémentation pour les deux méthodes -->

<?php 

interface Nageur {

    public function nager();

}

interface Voleur {

    public function voler();

}

class SuperHero implements Nageur, Voleur {

    public function nager(){
        return " je sais nager ";
    }
    public function voler(){
        return " je sais voler";
    }
}

$hero = new SuperHero();
echo $hero->nager();
echo "<br>";
echo $hero->voler();
