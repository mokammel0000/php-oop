<?php

include 'Classes/Vehicle.php';

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
