<?php

class Vehicle
{
    private $brand;

    private function __construct($brand)
    {
        $this->brand = $brand;
    }

    private function getBrand()
    {
        return $this->brand;
    }
}

class Car extends Vehicle
{
    public function displayBrand()
    {
        // even in the child, you can't use the private members.
        // return $this->getBrand(); // Fatal error: Uncaught Error: Call to private method Vehicle::getBrand()
    }
}


$my_vehicle = new Vehicle('Honda');
// echo $my_vehicle->brand;      // Fatal error: Uncaught Error: Cannot access protected property

$my_car = new Car("Toyota");
// echo $my_car->brand;          // Fatal error: Uncaught Error: Cannot access protected property
echo $my_car->displayBrand();
