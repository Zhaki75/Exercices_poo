<?php


    abstract class Form {

        abstract function calculerSurface(): int|float;
}

    class Cercle extends Form {

        private null|int|float $rayon;

        public function __construct(int|float $rayon)
        {
            $this->rayon = $rayon;
        }

            public function getRayon(): int|float {
            return $this->rayon;
        }

        public function setRayon(int|float $rayon): void {
            $this->rayon = $rayon;
        }

        public function calculerSurface(): float {
            return pi() * pow($this->rayon, 2);
        }

}

class Rectangle extends Form {

    private int|float $longueur;
    private int|float $largeur;

    public function __construct(int|float $largeur, int|float $longueur)
        {
            $this->largeur = $largeur;
            $this->longueur = $longueur;
        }
    

     public function calculerSurface(): int|float {
        return $this->longueur * $this->largeur;
     
    }

    public function getLargeur(): int|float {
        return $this->largeur;
    }

    public function setLargeur(int|float $largeur): void {
        $this->largeur = $largeur;
    }

    public function getLongueur(): int|float {
        return $this->longueur;
    }

    public function setLongueur(int|float $longueur): void {
        $this->longueur = $longueur;
    }
}

$cercle = new Cercle(2);
echo $cercle->calculerSurface();

  echo "<br>";

$rectangle = new Rectangle(3, 6);
echo $rectangle->calculerSurface();

