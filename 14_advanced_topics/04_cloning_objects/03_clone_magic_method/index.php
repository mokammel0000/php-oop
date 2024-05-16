<?php

// __clone method allows you to define custom behavior for cloning an object
// بتقول إيه الي عاوزه يحصل بالضبط لما نعمل كلون من الأوبجيكت ده


class Human
{
    public function __construct(public string $name, public int $age)
    {
    }

    public function __clone()
    {
        $this->name = "Cloned " .$this->name;
        $this->age = 2 * $this->age;
    }
}

$first_person = new Human('ahmed', 22);
$second_person = clone $first_person;  // custom clone

// $first_person->name = 'mahmoud';
// $second_person->name = 'hesham';

echo '<pre>';
print_r($first_person);
print_r($second_person);
echo '</pre>';
