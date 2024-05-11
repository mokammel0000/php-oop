<?php

include "Model/Customer.php";
include "Model/Product.php";

// you can import multiple classes from the same namespace in just one line
use Store\Model\{Customer, Product};

$ahmed = new Customer('ahmed');
$ahmed->getCustomerName();


$laptop = new Product('hp laptop');
$laptop->getProductName();
