<?php

// clone keyword allows you to perform a [[shallow copy]] of an object,

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
