<?php

include "Model/Customer.php";
include "Model/Product.php";

// $ahmed = new Store\Model\Customer('ahmed');
// $ahmed->getCustomerName();

// instead of using the fully qualified name, you can use `use` keyword to use the whole namespace: 

use Store\Model\Customer;
$ahmed = new Customer('ahmed');
$ahmed->getCustomerName();


use Store\Model\Product;
$laptop = new Product('hp laptop');
$laptop->getProductName();
