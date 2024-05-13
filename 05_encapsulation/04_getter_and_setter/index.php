<?php

class Mobile
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


$my_mob = new Mobile();

$my_mob->setSerialNumber('1234');

$my_mob->getSerialNumber();
