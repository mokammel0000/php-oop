<?php

trait CanFlyTrait
{
    public function fly()
    {
        echo 'I can fly <br>';
    }
}

class Bird
{
    use CanFlyTrait;
    public function chirp()
    {
        echo 'bird can chirp <br>';
    }
}

class Plane
{
    use CanFlyTrait;
    public function engineNoise()
    {
        echo "Vroom vroom!\n";
    }
}


$snowsnow = new Bird();
$snowsnow->fly();
$snowsnow->chirp();


$egyptian_plane = new Plane();
$egyptian_plane->fly();
$egyptian_plane->engineNoise();
