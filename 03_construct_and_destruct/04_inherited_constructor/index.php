<?php

class Human
{
    public function __construct(public string $name, public int $age, public float $weight)
    {
    }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, <br>";
    }
}

class Child extends Human
{
    // override the base constructor
    public function __construct(public string $name, public int $age, public float $weight, public string $school)
    {
    }

    // override method from parent
    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, school = {$this->school} <br>";
    }
}



$ahmed = new Human('ahmed', 20, 181);
$ahmed->printDetails();

$hussein = new Human('hussein', 31, 165);
$hussein->printDetails();


// $adam = new Child('Adam', 9, 130);
$adam = new Child('Adam', 9, 130, 'Almohamadia');
$adam->printDetails();
