<?php

abstract class AbstractAnimal
{
    public $age;
    public $weight;

    public function eat()
    {
    }

    abstract public function voice();
}

class Lion extends AbstractAnimal
{
    public function voice()
    {
        echo 'Lion says 3ow 3ow <br>';
    }
}


class Dog extends AbstractAnimal
{
    public function voice()
    {
        echo 'Dog says how how <br>';
    }
}

class Cat extends AbstractAnimal
{
    public function voice()
    {
        echo 'Cat says now now <br>';
    }
}



$animals = [
    new Lion(),
    new Dog(),
    new Cat()
];

foreach($animals as $animal) {  // all of them considered as an animal, and has the same functionalities
    $animal->voice();
}
