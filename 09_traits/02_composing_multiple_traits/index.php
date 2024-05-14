<?php


trait CanRunTrait
{
    public function Run()
    {
        echo 'can run <br>';
    }
}

trait CanFlyTrait
{
    public function fly()
    {
        echo 'can fly <br>';
    }
}

trait CanSwimTrait
{
    public function swim()
    {
        echo 'can swim <br>';
    }
}

// you can compose multiple traits into a trait (trait use trait1, trait2, trait3, ...)

trait HobbiesTrait
{
    use CanFlyTrait;
    use CanRunTrait;
    use CanSwimTrait;
}

class Human
{
    use HobbiesTrait;
}

$ahmed = new Human();
$ahmed->fly();
$ahmed->run();
$ahmed->swim();
