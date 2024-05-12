<?php

class Car
{
    public $color;
    private $serialNumber;

    // getter,setter methods can provide custom logic to manipulate the property value.

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = 'al-kamel group' . $serialNumber;
    }

    public function getSerialNumber()
    {
        echo "the serial number is {$this->serialNumber}";
    }
}


$myCar = new Car();

$myCar->setSerialNumber('1234');

$myCar->getSerialNumber();
