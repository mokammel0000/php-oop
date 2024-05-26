<?php

// stdClass is a generic empty class(it has no predefined class structure)
// You can create an instance of stdClass directly and then dynamically add properties to it.

// stdClass is just an empty class, it does not have methods or predefined properties.

// use stdClass to create simple object without the need to define a full class structure.

$my_object = new stdClass();
$my_object->name = 'name1';
$my_object->stock = 300;

echo '<pre>';
var_dump($my_object);
echo '</pre>';


// Important Note: stdClass is a class like any other class,
// it's not base/ root of other classes.
