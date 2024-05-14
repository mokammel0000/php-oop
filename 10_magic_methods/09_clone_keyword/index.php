<?php

class Human
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}


$first_person = new Human('ahmed', 22);
// $second_person = $first_person;          // just one object, with 2 references refer on it.
$second_person = clone $first_person;       // duplicate the object
// there are 2 different objects, each one has it's own reference.

$first_person->name = 'mahmoud';
$second_person->name = 'hesham';

echo '<pre>';
print_r($first_person);
print_r($second_person);
echo '</pre>';
