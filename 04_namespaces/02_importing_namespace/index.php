<?php

include "Model/Customer.php";
include "Model/Product.php";

// $ahmed = new Store\Model\Customer('ahmed');
// $ahmed->getCustomerName();

// instead of using the fully qualified name, you can use `use` keyword to use the whole namespace: 

use Store\Model;
$ahmed = new Model\Customer('ahmed');
$ahmed->getCustomerName();


$laptop = new Model\Product('hp laptop');
$laptop->getProductName();
