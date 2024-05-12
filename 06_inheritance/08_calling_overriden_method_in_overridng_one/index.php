<?php

class Organism
{
    public function eat()
    {
        return 'Organism can eat ';
    }
}

class Dog extends Organism
{
    public function eat()
    {
        // $message = $this->eat();   // can't do this... infinity loop
        $message = parent::eat();
        return $message . 'Dog can eat <br>';
    }
}

$animal = new Organism();
echo $animal->eat() . '<br>';


$rock = new Dog();
echo $rock->eat();
