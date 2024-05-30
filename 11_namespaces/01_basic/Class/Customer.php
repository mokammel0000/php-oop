<?php

namespace Store\Class;

class Customer
{
    private $CustomerAge;

    public function __construct($CustomerAge)
    {
        $this->CustomerAge = $CustomerAge;
    }

    public function getCustomerAge()
    {
        echo $this->CustomerAge . '<br>';
    }
}
