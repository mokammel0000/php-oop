<?php

// get magic method is used to handel the case that
// any developer called an undefined property or private property from your class.
class Person
{
    private $name;

    public function __get($name)
    {
        // you can do any logic in it, not just printing an error message
        echo "the (({$name})) property is undefined or inaccessible <br>";
    }
}

$ahmed = new Person();
echo $ahmed->name;  // Fatal error: Cannot access private property Person::$name
echo $ahmed->age;  // Warning: Undefined property: Person::$age
