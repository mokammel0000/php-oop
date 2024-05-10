<?php

class Human
{
    const NUMBER_OF_EYES = 2;

    public $name;
    public $age;
    public $height;

    public function setDetails($name, $age, $height)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
    }

    public function getDetails()
    {
        echo  '-------------------the get details method:-----------------------<br>';
        echo  Self::NUMBER_OF_EYES . '<br>';    // self refer to the class which it's written in.
        echo  static::NUMBER_OF_EYES . '<br>';  // static refer to the class which it's called from.
                                                // the real difference will appear in Inheritance.

        echo 'this is a human <br>';
        echo "his name is {$this->name} <br>";
        echo "his age is {$this->age} <br>";
        echo "his height is {$this->height} <br>";
    }
}
