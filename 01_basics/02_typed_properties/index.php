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
$ahmed = new Human();
$ahmed->setDetails(name: 'ahmed', age: 19, height: 181.5);
$ahmed->getDetails();

$mohamed = new Human();
$mohamed->setDetails('mohamed', 33, "170.3");  // note that, PHP coerces the string to a float
$mohamed->getDetails();
