<?php

// static members can be used without instantiating any object
// static property can be called from the class --- it belongs to the class not to a specific object

class Employee
{
    public static int $counter = 0;

    public function __construct()
    {
        // calling static member inside the class itself:
        // self::$counter++;
        static::$counter++;
    }
}

// calling static member outside the class:
echo Employee::$counter . '<br>';


$ahmed1 = new Employee();
echo $ahmed::$counter . '<br>';
