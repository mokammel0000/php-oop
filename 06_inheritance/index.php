<?php

include('Classes/Organism.php');
include('Classes/Animal.php');
include('Classes/Reptile.php');

$or = new Organism();
$ani = new Animal();
$rep = new Reptile();


$or->eat();
$ani->eat();
$rep->eat();

$arr = [$or, $ani, $rep];
foreach ($arr as $animal) {
    print_r($animal);
}
