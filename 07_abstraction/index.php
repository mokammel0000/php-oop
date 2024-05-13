<?php

abstract class AbstractAnimal
{
    protected $name;
    protected $age;
    protected $numberOfLimbs;

    public function eat()
    {
        echo 'this animal can eat <br>';
    }

    abstract public function voice();
}

class Dog extends AbstractAnimal
{
    public function voice()
    {
        echo 'how how <br>';
    }
}

class Cat extends AbstractAnimal
{
    public function voice()
    {
        echo 'now now <br>';
    }
}

$jack = new Dog();
$jack->voice();
$jack->eat();


$kitty = new Cat();
$kitty->voice();
$kitty->eat();
