<?php

class Human
{
    public function __construct(public string $name, public int $age, public float $weight)
    {
    }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, <br>";
    }

    // destructor doesn’t accept any argument.
    public function __destruct()
    {
        echo 'the end of this object <br>';
    }
}

class Child extends Human
{
    public function __construct(public string $name, public int $age, public float $weight, public string $school)
    {
    }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, school = {$this->school} <br>";
    }
}


$ahmed = new Human('ahmed', 20, 181);
$ahmed->printDetails();

$adam = new Child('Adam', 9, 130, 'Almohamadia');
$adam->printDetails();


// PHP automatically invokes __destruct() when the object is no longer in use.
// why it's invoked? 
// to close database connections, closing files, or freeing memory, ...