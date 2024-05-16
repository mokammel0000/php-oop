<?php

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

}

$ahmed = new User(1, 'ahmed', 'ahmed@example.com');
$serialized_object = serialize($ahmed);

print_r($serialized_object);
