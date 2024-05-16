<?php

// If you define __sleep() method in the class, it’ll be executed before serializing the object.
// __sleep() method returns an array that contains property names that will be serialized.
// If the __sleep() method doesn’t return anything, the serialize() function will serialize null value.

class User
{
    private $id;
    private $name;
    private $email;

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function __sleep()
    {
        // sleep method must return an array
        return ['id', 'name'];
    }

}

$ahmed = new User(1, 'ahmed', 'ahmed@example.com');
$serialized_object = serialize($ahmed);         // will not serialize user's email

print_r($serialized_object);
