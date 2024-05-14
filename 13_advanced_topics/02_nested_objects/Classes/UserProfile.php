<?php

class UserProfile
{
    public function __construct(private string $email, private string $phone)
    {
    }

    public function changeEmail($email)
    {
        $this->email = $email;
    }

    public function changePhone($phone)
    {
        $this->phone = $phone;
    }

    public function getDetails()
    {
        echo "email = {$this->email}, phone = {$this->phone} <br>";
    }
}
