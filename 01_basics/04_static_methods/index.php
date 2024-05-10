<?php

class Employee
{
    public static int $counter = 0;

    public static function getCounter()
    {
        echo self::$counter . '<br>';
    }

    public static function increaseCounter()
    {
        self::$counter++;
    }
}

echo Employee::increaseCounter();

echo Employee::getCounter();
// static property can be called from the class --- it belongs to the class not to a specific object


$ahmed = new Employee();
$ahmed->increaseCounter(); // static methods can be used from objects (not like properties)
$ahmed->getCounter();



echo Employee::getCounter();