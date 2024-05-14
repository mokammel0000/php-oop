<?php

class Human
{

    // there is nothing called multiple constructor in php, 
    // but you can work around that as the following:

    public $name;
    public $age;

    public function __construct($name = null, $age = null)
    {
        if ($name !== null) {
            $this->name = $name;
        }
        if ($age !== null) {
            $this->age = $age;
        }
    }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age} <br>";
    }
}

// here you can call 2 different constructors
$ahmed = new Human(age: 20);
$ahmed->printDetails();

$hussein = new Human(name:'hussein');
$hussein->printDetails();
