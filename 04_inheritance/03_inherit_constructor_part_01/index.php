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

    // if you don't write a constructor, it will inherite the parent's constructor by default.

}


$kitty = new Cat(1);

echo '<pre>';
var_dump($kitty);
echo '</pre>';
