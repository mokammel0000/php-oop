<?php

// unserialize() function converts a serialized string into an object

// unserialize() function creates a completely new object that does not refer to the original one.

// if the class of the object is not known,
// the unserialize() function will create an object of the __PHP_Incomplete_Class class instead.

class User
{
    private $id;
    private $name;
    public $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

}

$ahmed = new User(1, 'ahmed', 'ahmed@example.com');
$serialized_object = serialize($ahmed);

print_r($serialized_object . '<br>');

$ahmed_after_unserialization = unserialize($serialized_object);
echo($ahmed_after_unserialization->email . '<br>');


echo($ahmed === $ahmed_after_unserialization);  // now, there are 2 different objects.
