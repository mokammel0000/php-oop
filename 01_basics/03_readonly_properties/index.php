<?php

class User
{
    // Readonly properties:
    // -can be only initialized once.
    // -PHP only supports readonly on a [typed property] => untyped properties has a value = null.
    // -must be initialized from within the class itself (either from the constructor or a method).

    public readonly string $username;
    // public readonly $password;  // error

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function setUserName(string $username)
    {
        $this->username = $username;
    }


}

$ahmed = new User('ahmed123');

// $ahmed->username = 'ahmod';          //  error
// $ahmed->setUserName('ahmoooooooood');   // error
echo $ahmed->username;
