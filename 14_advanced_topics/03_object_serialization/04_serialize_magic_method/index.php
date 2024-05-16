<?php

// __serialize() is similar to the __sleep().
// using __serialize() you can add your own logic.
// __serialize() method returns an associative array of key/value pairs representing the object’s serialized form.
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

    public function __serialize()
    {
        // __serialize method must return an array
        return [
            'name' => $this->name,
            'email' => $this->email,
        ];
        // you can encrypt values throw __serialize or add your own logic on them.
    }

    // if a class has both __serialize() and __sleep(),
    // the serialize() function calls the __serialize() method only and ignores the __sleep() method.

}

$ahmed = new User(1, 'ahmed', 'ahmed@example.com');
$serialized_object = serialize($ahmed);

print_r($serialized_object);
