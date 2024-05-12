<?php

class Human
{
    // PHP constructor promotion: 
    // if you write the access modifier before the parameter: 
    // it will be both constructor’s argument and an object’s property.
    // public function __construct(public string $name, public int $age, public float $weight)
    // {

    // }

    private $weight;
    public function __construct(public string $name, $weight, public int $age)
    {
        // $weight here just a parameter, it's not a property for the class.
        $this->weight = $weight;
    }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, <br>";
    }
}


$ahmed = new Human(name: 'ahmed',age: 20,weight: 181);
$ahmed->printDetails();

$hussein = new Human('hussein', 31, 165);
$hussein->printDetails();
