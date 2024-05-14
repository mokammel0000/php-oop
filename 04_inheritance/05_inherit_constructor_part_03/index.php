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

    // this is a completly new constructor,
    // no relation between it and it's parents one
    public function __construct($age, $weight)
    {
        $this->age = $age;
        $this->weight = $weight;
    }
}


$kitty = new Cat(1, 3);

echo '<pre>';
var_dump($kitty);
echo '</pre>';
