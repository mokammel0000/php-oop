<?php

class Circle
{
    public const PI = 3.14;

    public function getDetails()
    {
        // calling Constants inside the class itself:
        echo  self::PI . '<br>';    // self refer to the class which it's written in.
        echo  static::PI . '<br>';  // static refer to the class which it's called from.
    }
}
$c1 = new Circle();

echo Circle::PI . '<br>';
echo $c1::PI . '<br>';

$c1->getDetails();


// you can reference the class using a variable with the value is the class name:
$className = 'Circle';
echo $className::PI; // = Circle::PI
