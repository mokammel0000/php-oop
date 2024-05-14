<?php

// PHP invokes the __callStatic() method when you invoke an inaccessible static method of a class.
class Person
{
    private static int $counter = 0;
    private static function getCounter()
    {
        return self::$counter;
    }

    public static function __callStatic($name, $args)
    {
        echo "static method {$name} " .
        (empty($args) ? " " : "with arguments = " . implode('- ', $args)) .
        " is not defined or not accessible <br>";
    }
}


echo Person::getCounter();
