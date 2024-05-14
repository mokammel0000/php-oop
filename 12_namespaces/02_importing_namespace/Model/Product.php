<?php

namespace Store\Model;

class Product
{
    private $ProductName;

    public function __construct($ProductName)
    {
        $this->ProductName = $ProductName;
    }

    public function getProductName()
    {
        echo $this->ProductName . '<br>';
    }
}
