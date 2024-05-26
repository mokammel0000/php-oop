<?php

// if you cast an array to an object, PHP will convert it to an instance of stdClass.

$arr = [
    'name' => 'Mohamed',
    'age' => 22,
    'address' => 'Talkha',
];

$user = (object) $arr;

echo '<pre>';
var_dump($user);
echo '</pre>';
