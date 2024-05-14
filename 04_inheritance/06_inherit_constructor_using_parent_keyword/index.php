<?php

class Animal
{
    public $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

}

class Cat extends Animal
{
    public $weight;


    // to force the constructor to inherite it's parent constructor, use [parent] keyword
    public function __construct($age, $weight)
    {
        parent::__construct($age);
        $this->weight = $weight;
    }
}


$kitty = new Cat(1, 3);

echo '<pre>';
var_dump($kitty);
echo '</pre>';
