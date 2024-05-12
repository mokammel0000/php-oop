<?php

class Employee
{
    // static members can be used without instantiating any object
    public static int $counter = 0;
    
    public function __construct()
    {
        self::$counter++;
    }

}


echo Employee::$counter . '<br>';
// static property can be called from the class --- it belongs to the class not to a specific object


$ahmed = new Employee();
// echo $ahmed->counter;     // we can NOT use static properties from objects

$ahmed1 = new Employee();
$ahmed2 = new Employee();
$ahmed3 = new Employee();
$ahmed4 = new Employee();
$ahmed5 = new Employee();

echo Employee::$counter . '<br>';