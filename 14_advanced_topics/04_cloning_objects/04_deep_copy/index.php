<?php

// __clone() magic method perform a [[deep copy]] of an object.
// Deep copy creates a copy of an object
// and recursively creates a copy of the objects referenced by the properties of the object.

// you can perform Deep copy using serialize and unserialize functions (think of it...)

class Address
{
    public function __construct(public string $city, public string $street)
    {
    }
}

class Human
{
    public function __construct(public string $name, public Address $address)
    {
    }

    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

$ahmed = new Human('Ahmed', new Address('Talkha', 'Soliman Khater Street'));
$hamdy =  $ahmed;       // 2 references to the same object
$hamdy = clone $ahmed;  // shallow copy

$hamdy->name = 'hamdy';
$hamdy->address->city = 'mansoura'; // the 2 objects are referred to the same address object...

echo '<pre>';
var_dump($ahmed);
var_dump($hamdy);
echo '</pre>';
