<?php

class Human
{
    public string $name;
    public int $age;
    public float $weight;

    public function __construct($name, $age, $weight)
    {
        $this->name = 'My name is ' . $name;
        $this->age = $age;
        $this->weight = $weight;
    }

    public function printDetails()
    {
        echo "{$this->name} and I'm {$this->age} years old, with {$this->weight} kg <br>";
    }
}

class Child extends Human
{
    // override the base constructor
    public function __construct($name, $age, $weight, private string $school)
    {
        parent::__construct($name, $age, $weight);
    }

    // override method from parent
    public function printDetails()
    {
        parent::printDetails();
        echo "my scool is {$this->school} <br>";
    }
}



$ahmed = new Human('ahmed', 20, 181);
$ahmed->printDetails();

$hussein = new Human('hussein', 31, 165);
$hussein->printDetails();


// $adam = new Child('Adam', 9, 130);
$adam = new Child('Adam', 9, 130, 'Almohamadia');
$adam->printDetails();
