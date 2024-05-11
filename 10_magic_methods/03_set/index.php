<?php

// set magic method is used to handel the case that
// any developer set a value in an undefined property or private property from your class.
class Human
{
    private $name;

    public function __set($name, $value)
    {
        echo "you can't assign value ({$value}) to property ({$name}) because it's undefined or inaccessible <br>";
    }
}



$ahmed = new Human();
$ahmed->name = 'ahmed';  // Fatal error: Uncaught Error: Cannot access private property Human::$name
$ahmed->age = 21;  // no errors - will create a new property for this object