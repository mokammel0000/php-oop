<?php

// you can cast an array to an stdClass object
// any key in the array will be an attribute in the object


$arr = [
    'name' => 'Mohamed',
    'age' => 22,
    'address' => 'Talkha',
];

$user = new stdClass();
$user = $arr;

echo '<pre>';
var_dump($user);
echo '</pre>';
