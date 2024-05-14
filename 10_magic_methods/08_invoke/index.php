<?php

// invoke allowing us to use the object as a function
// PHP will call the __invoke() magic method when you call an object as a function.

class Person
{
    public $name;

    public function __invoke($name)
    {
        echo "$this->name بيمسي على $name <br>";
    }
}

$ahmed = new Person();
$ahmed->name = 'أحمد';
$ahmed('إبراهيم');  // we call ahmed() here: Function Object or Functor.


echo is_callable($ahmed) ? 'yes' : 'no'; // yes
