<?php

class Organism
{
    // overriden method
    public function eat()
    {
        echo 'Organism can eat <br>';
    }
}

class Dog extends Organism
{
    // overriding method
    // public function eat($food)   // you can't change the signature of the overriding method
    public function eat()
    {
        echo 'Dog can eat <br>';
    }
}

$animal = new Organism();
$animal->eat();


$kitty = new Dog();
$kitty->eat();
