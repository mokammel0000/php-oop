<?php

class Animal
{
    public int $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

}

class Cat extends Animal
{
    public float $weight;

    // completely new constructor
    public function __construct($weight)
    {
        $this->weight = $weight;
    }
}


$kitty = new Cat(3);

echo '<pre>';
var_dump($kitty);
echo '</pre>';
