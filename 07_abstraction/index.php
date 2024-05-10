<?php

abstract class AbstractAnimal
{
    public $name;

    abstract public function eat();
}

class Dog extends AbstractAnimal
{
    
    function eat()
    {
        echo 'dog can eat <br>';
    }
}


