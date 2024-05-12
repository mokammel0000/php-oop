<?php


class User
{
    private readonly string $username;
    private readonly UserProfile $profile;

    public function __construct($username)
    {
        $this->username = $username;
    }

    public function setProfile(UserProfile $profile)
    {
        $this->profile = $profile;
    }

    public function getProfile(): UserProfile
    {
        return $this->profile;
    }
}
