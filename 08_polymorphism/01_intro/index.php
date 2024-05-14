<?php

// interface = contract.
// all methods of the interface are abstract methods.
// An interface can also include constants.

// Note that all the methods in the interface must be public.

interface OrganismInterface
{
    public const ORGANISM = 1;
    // public static $counter = 1;   // can't do that

    public function eat();
}


interface BirdInterface
{
    public function fly();
}

class Birds implements OrganismInterface, BirdInterface
{
    public function eat()
    {
        echo 'Bird cat eat <br>';
    }

    public function fly()
    {
        echo 'Bird cat fly <br>';
    }
}

$bird = new Birds();
$bird->eat();
$bird->fly();
