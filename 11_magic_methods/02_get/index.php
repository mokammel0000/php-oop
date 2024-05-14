<?php

// get magic method is used to handel the case that
// any developer called an undefined property or private property from your class.
class Human
{
    private $name;

    public function __get($name)
    {
        echo "the (({$name})) property is undefined or inaccessible <br>";
    }
}



$ahmed = new Human();
echo $ahmed->name;  // Fatal error: Uncaught Error: Cannot access private property Human::$name
echo $ahmed->age;  // Warning: Undefined property: Human::$age