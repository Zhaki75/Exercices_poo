<!-- Exercice 2 : Interface et implémentation
Créez une interface « Vehicule » avec deux méthodes : « demarrer() » et « arreter() ».
Ensuite, créez deux classes « Voiture » et « Moto » qui implémentent l’interface « Vehicule » 
en fournissant une implémentation pour les méthodes « demarrer()» et « arreter() » -->

<?php

    interface Vehicule {

        public function demarrer();

        public function arreter();
    }

    class Voiture implements Vehicule {

        public function demarrer(){
            echo "La voiture démarre";
        }

        public function arreter(){
            echo " La voiture s'arrête";
        }

    }

    class Moto implements Vehicule {

        public function demarrer(){
            echo " la moto demarre";
        }

        public function arreter(){
            echo " la moto s'arrete ";
        }
        
    }

    $voiture = new Voiture;
    $voiture->demarrer();