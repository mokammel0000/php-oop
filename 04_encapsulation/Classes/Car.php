<?php

/**
 * Encapsulate data, 
 * then you can make your own logic while reading or writing on it
 */

class Car {
    public $color;
    private $serialNumber;

    function setSerialNumber($serialNumber) {
        $this->serialNumber = 'al-kamel group' . $serialNumber;
    }
    
    function getSerialNumber() {
        echo "the serial number is {$this->serialNumber}";
    }
}