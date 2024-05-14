<?php

class Organism
{
    public $age;

    public function eat()
    {
        echo 'Organism can eat <br>';
    }
}

class Bird extends Organism
{
    public function eat()
    {
        echo 'Bird can eat <br>';
    }
}

class Reptile extends Organism
{
    public function eat()
    {
        echo 'Reptile can eat <br>';
    }
}

$organism = new Organism();
$bird = new Bird();
$reptile = new Reptile();


$organism->eat();
$bird->eat();
$reptile->eat();

$arr = [$organism, $bird, $reptile];

foreach ($arr as $animal) {

    echo '<pre>';
    print_r($animal);
    echo '</pre>';
}
