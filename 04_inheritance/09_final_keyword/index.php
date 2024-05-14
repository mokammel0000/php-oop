<?php

// final class Vehicle
class Vehicle
{
    public $modelNumber;

    final public function accelerat()
    {
        echo 'Vehicle 3n 3n 3aaaaaaaaaaaaaan <br>';
    }
}


// class Car extends Vehicle        // final class can't be extended
class Car extends Vehicle
{
    public $modelNumber;
    public $price;

    // public function accelerat()  // final method can't be ovverride
    // {
    //     echo 'an an aaaaaaaaaaaaaaan <br>';
    // }
}


$my_car = new Vehicle();
$my_car->accelerat();

$my_car = new Car();
$my_car->accelerat();
