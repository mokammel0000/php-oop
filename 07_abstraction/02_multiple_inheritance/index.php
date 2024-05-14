<?php

abstract class AbstractAnimal
{
    abstract public function voice();
}

abstract class Dog extends AbstractAnimal
{
    abstract public function eat();
}

class GoldenDog extends Dog
{
    public function voice()
    {
        echo 'how how how <br>';
    }

    public function eat()
    {
        echo 'dog can eat <br>';
    }
}

$dog = new GoldenDog();
$dog->voice();
$dog->eat();
