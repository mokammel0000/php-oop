<?php
/**
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
