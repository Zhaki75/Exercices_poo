<?php

    class Person {
        public ?string $firstName;
        public ?string $lastName;
        public ?string $favoriteMeal;

        public function __construct(string $firstName, string $lastName, string $favoriteMeal){
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->favoriteMeal = $favoriteMeal;
        }

    }

     $person1 = new Person("karim", "larass", "poulet");
     $person2 = new Person("moussa", "sissoko", "tieb");
     $person3 = new Person("laure", "dupont", "crevette");

     echo "{$person1->firstName} {$person1->lastName} aime le {$person1->favoriteMeal}<br>";
     echo "{$person2->firstName} {$person2->lastName} aime le {$person2->favoriteMeal}<br>";
     echo "{$person3->firstName} {$person3->lastName} aime la {$person3->favoriteMeal}<br>";