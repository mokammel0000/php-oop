<?php

namespace Store\Model;

class Customer
{
    private $CustomerName;

    public function __construct($CustomerName)
    {
        $this->CustomerName = $CustomerName;
    }

    public function getCustomerName()
    {
        echo $this->CustomerName . '<br>';
    }
}