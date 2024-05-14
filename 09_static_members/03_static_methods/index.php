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
// static members can be called from the class --- it belongs to the class not to a specific object


$ahmed = new Employee();
$ahmed->increaseCounter();
$ahmed->getCounter();

echo Employee::getCounter();
