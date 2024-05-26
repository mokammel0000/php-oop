<?php

// you can decode a json file to either assotiative array, or object from stdClass

$json_file = '{
    "name" : "Mohamed", 
    "age" : "22", 
    "address" : "Talkha"
}';

$data = json_decode($json_file, true);  // here it will be decoded to an assotiative array
echo $data['name'];

echo '<pre>';
var_dump($data);
echo '</pre>';


// if the second parameter is false (or not provided), the JSON data is converted to an stdClass object.

$data = json_decode($json_file);  // here it will be decoded an object of stdClass
echo $data->age;

echo '<pre>';
var_dump($data);
echo '</pre>';
