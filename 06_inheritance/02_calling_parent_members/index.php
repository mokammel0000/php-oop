<?php

class Organism
{
    public int $age;

    public function eat()
    {
        return 'Organism can eat';
    }
}

class Dog extends Organism
{
    // calling property from the parent class
    public function printAge()
    {
        echo "Dog's age = {$this->age} <br>";
    }

    // calling method from the parent class
    public function eat()
    {
        // $message = $this->eat();     // Error
        $message = parent::eat();
        echo $message . 'it is from Dog class';
    }
}


$rock = new Dog();
$rock->age = 1;
$rock->printAge();

$rock->eat();
