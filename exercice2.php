<?php

    // class Person {
    //     private string $firstName;
    //     private string $lastName;
    //     private string $favoriteMeal;

    //     public function __construct(string $firstName, string $lastName, string $favoriteMeal){
    //         $this->firstName = $firstName;
    //         $this->lastName = $lastName;
    //         $this->favoriteMeal = $favoriteMeal;
    //     }

    //      public function getFirstName(): string {
    //         return $this->firstName;
    //     }

    //     public function setFirstName(string $firstName): void {
    //         $this->firstName = $firstName;
    //     }
        

    //      public function getLastName(): string {
    //         return $this->lastName;
    //     }

    //     public function setLastName(string $lastName): void {
    //         $this->lastName = $lastName;
    //     }

    //     public function getFavoriteMeal(): string {
    //         return $this->favoriteMeal;
    //     }

    //     public function setFavoriteMeal(string $favoriteMeal): void {
    //         $this->favoriteMeal = $favoriteMeal;
    //     }

    //     public function presentation(): string {
    //         return "Je m'appelle {$this->firstName} {$this->lastName} et j'aime le {$this->favoriteMeal}. <br>";
    //     }

    // }

    //  $person1 = new Person("karim", "larass", "poulet");
    //  $person2 = new Person("moussa", "sissoko", "tieb");
    //  $person3 = new Person("laure", "dupont", "crevette");

    // echo $person1->presentation();
    // echo $person2->presentation();
    // echo $person3->presentation();

    //  echo "{$person1->firstName} {$person1->lastName} aime le {$person1->favoriteMeal}<br>";
    //  echo "{$person2->firstName} {$person2->lastName} aime le {$person2->favoriteMeal}<br>";
    //  echo "{$person3->firstName} {$person3->lastName} aime la {$person3->favoriteMeal}<br>"; -->



    class Person {

        private string $firstName;
        private string $lastName;
        private string $favoriteMeal;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal)
        {
          $this->firstName = $firstName;
          $this->lastName = $lastName;
          $this->favoriteMeal = $favoriteMeal;
        }

        public function getfirstName(): string {
            return $this-> firstName;
        }

        public function setfirstName(string $firstName): void {
            $this-> firstName = $firstName;
        }

        public function getlastName(): string {
            return $this-> lastName;
        }

        public function setlastName(string $lastName): void {
            $this-> lastName = $lastName;
        }

         public function getFavoriteMeal(): string {
            return $this-> favoriteMeal;
        }

        public function setFavoriteMeal(string $favoriteMeal): void {
            $this-> favoriteMeal = $favoriteMeal;
        }

        public function presentation(): string {
            return "Je m'appelle {$this->firstName} {$this->lastName} et j'aime le {$this->favoriteMeal}. <br>";
        }
    


    }

    $person1 = new Person("kei", "jeur", "jerrr");
    $person2 = new Person("kei", "jeur", "jerrr");
    $person3 = new Person("kei", "jeur", "jerrr");

    echo $person1->presentation();



    // echo "{$person1->firstName} {$person1->lastName} aime le {$person1->favoriteMeal}<br>";
    // echo "{$person2->firstName} {$person2->lastName} aime le {$person2->favoriteMeal}<br>";
    // echo "{$person3->firstName} {$person3->lastName} aime le {$person3->favoriteMeal}<br>";