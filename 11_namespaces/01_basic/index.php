<?php
/**
 * name collision = your code has different classes with the same name
 *
 * namespace = مساحة عمل/ مساحة لتجميع الحاجات الي لها علاقة ببعض
 * you can group classes, interfaces, functions, and constants under a specific namespace,
 * which acts like a container for these elements.
 */
include "Model/Customer.php";
include "Model/Product.php";

// $ahmed = new Customer();     // it is in namespace
// you need to use the fully qualified name that includes the namespace

$ahmed = new Store\Model\Customer('ahmed');
$ahmed->getCustomerName();

$ali = new Store\Class\Customer(30);
$ali->getCustomerAge();
