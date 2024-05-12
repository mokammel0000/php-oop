<?php

spl_autoload_register(function ($class) {
    require "Classes/{$class}.php";
});

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
