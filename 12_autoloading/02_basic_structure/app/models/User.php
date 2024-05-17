<?php


class User
{
    private string $userName;
    private string $password;

    public function __construct($userName, $pass)
    {
        $this->userName = $userName;
        $this->password = password_hash($pass, PASSWORD_DEFAULT);
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
