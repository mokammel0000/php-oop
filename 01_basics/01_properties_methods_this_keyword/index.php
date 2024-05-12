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

echo '<pre>';

$ahmed = new Human();
var_dump($ahmed);  // untypes values = null (doesn't have a type yet)

$ahmed->setDetails(name: 'ahmed', age: 19, height: 181.5);
var_dump($ahmed);  // here each value has it's own type


$ahmed->getDetails();
echo '</pre>';
