<?php

// protected properties and methods can only be accessed from within the class or its subclasses.
class Vehicle
{
    protected $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    protected function getBrand()
    {
        return $this->brand;
    }
}

class Car extends Vehicle
{
    public function displayBrand()
    {
        return $this->getBrand();
    }
}


$my_vehicle = new Vehicle('Honda');
// echo $my_vehicle->brand;      // Fatal error: Uncaught Error: Cannot access protected property

$my_car = new Car("Toyota");
// echo $my_car->brand;          // Fatal error: Uncaught Error: Cannot access protected property
echo $my_car->displayBrand();
