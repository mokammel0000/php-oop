<?php

class Human
{
    public $name;
    public $age;
    public $height;

    public function setDetails($name, $age, $height)
    {
        // Human is a template, we need to create multiple objects from it, 
        // this refer to [[the current object]]
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
    }

    public function getDetails()
    {
        echo 'this is a human <br>';
        echo "his name is {$this->name} <br>";
        echo "his age is {$this->age} <br>";
        echo "his height is {$this->height} <br>";
    }
}
$ahmed = new Human();
$ahmed->setDetails(name: 'ahmed', age: 19, height: 181.5);
$ahmed->getDetails();
