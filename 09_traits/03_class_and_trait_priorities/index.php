<?php

trait CanFlyTrait
{
    public function fly()
    {
        echo 'fly from Trait <br>';
    }
}

class Bird
{
    use CanFlyTrait;
    public function fly()
    {
        echo 'fly from bird class <br>';
    }
}

class Snowsnow extends Bird
{
    use CanFlyTrait;
    // public function fly()
    // {
    //     echo 'fly from snownoo class <br>';
    // }
}


$bird = new Bird();
$bird->fly();

$snowsnow = new Snowsnow();
$snowsnow->fly();
