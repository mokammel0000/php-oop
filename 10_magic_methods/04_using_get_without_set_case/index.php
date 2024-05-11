<?php

class Human
{
    private $name;

    public function __get($name)
    {
        echo "the (({$name})) property is undefined or inaccessible <br>";
    }
}



$ahmed = new Human();
$ahmed->school = 'Omar Makram';

echo $ahmed->school;  // will deal with it as an existing property without any errors
echo '<pre>';
var_dump($ahmed);
echo '</pre>';