<?php

// set magic method is used to handel the case that
// any developer set a value in an undefined property or private property from your class.
class Person
{
    private $name;

    public function __set($name, $value)
    {
        // you can do any logic in it, not just printing an error message
        echo "you can't assign value ({$value}) to property ({$name}) 
        because it's undefined or inaccessible <br>";
    }
}



$ahmed = new Person();
$ahmed->name = 'ahmed';  // Fatal error: Uncaught Error: Cannot access private property Person::$name
$ahmed->age = 21;  // no errors - will create a new property for this object
