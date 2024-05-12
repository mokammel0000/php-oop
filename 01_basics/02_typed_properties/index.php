<?php

// declare(strict_types = 1);

class Human
{
    public string $name;
    public int $age;
    public float $height;

    public function setDetails(string $name, int $age, float $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
    }

    public function getDetails()
    {
        echo "his name is {$this->name} <br>";
        echo "his age is {$this->age} <br>";
        echo "his height is {$this->height} <br>";
    }
}
$mohamed = new Human();

echo '<pre>';
var_dump($mohamed);  // typed properties = uninitialized - but has a type
echo '</pre>';


$mohamed->setDetails('mohamed', 33, "170.3");  // note that, PHP coerces the string to a float
$mohamed->getDetails();
