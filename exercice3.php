<?php

class Person{
       private ?string $firstName = null;
       private ?string $lastName = null;
       private ?string $favoriteMeal = null;


       public function __construct(string $firstName, string $lastName, string $favoriteMeal)
       {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->favoriteMeal = $favoriteMeal;
       }

       public function getFirstName(): string {
        return $this->firstName;
       }

       public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
       }

       public function getLastName(): string {
        return $this->lastName;
       }

       public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
       }


       public function getFavoriteMeal(): string {
        return $this->favoriteMeal;
       }

       public function setFavoriteMeal(string $favoriteMeal): void {
        $this->favoriteMeal = $favoriteMeal;
       }

       public function presentation() : string{

        return " Je m'apelle {$this->firstName} {$this->lastName} j'aime les {$this->favoriteMeal}";

       }
}

    $person1 = new Person("titi", "toto", "koko");
    $person2 = new Person("titi", "toto", "koko");
    $person3 = new Person("titi", "toto", "koko");

    echo $person1->presentation();


    class Employe extends Person{

        private ?float $salary;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal, float $salary)
       {
        parent::__construct($firstName, $lastName, $favoriteMeal);
            $this->salary = $salary;
        //“Va appeler le constructeur de ma classe parent (Person)
        //et laisse-le s’occuper de firstName, lastName et favoriteMeal.”
       }

        public function increaseSalary(float $percentage) {
            $this->salary += $this->salary * ($percentage / 100);
        
        }
   
        public function getSalary(): float {
            return $this->salary;
        }

        public function setSalary(float $salary): void {
            $this->salary = $salary;

        }

        public function presentation(): string
        {
            return " Je m'apelle {$this->getFirstName()} {$this->getLastName()} j'aime les {$this->getFavoriteMeal()} je touche {$this->salary} par mois";
        }

    }

    $employe = new Employe ("coco", "titi", "mama", 200);
    $employe->increaseSalary(5);
    echo $employe->presentation();





