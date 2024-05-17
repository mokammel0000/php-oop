<?php

function load_classes($class_name)
{
    $file_path = "Classes/{$class_name}.php";
    if (file_exists($file_path)) {
        require $file_path;
    }
}

function load_services($class_name)
{
    $file_path = "Services/{$class_name}.php";
    if (file_exists($file_path)) {
        require $file_path;
    }
}
// Loading Classes by yourself:
// load_classes('Cat');
// $kitty = new Cat();
// $kitty->eat();



// Loading Classes using spl autoload function:
// with spl_autoload_register(), you don't need to load classes manually,
// they will be loaded automatically...

spl_autoload_register('load_classes');
spl_autoload_register('load_services');

$kitty = new Cat();
$kitty->eat();

$bark = new Dog();
$bark->eat();

$email = new Email();
$email->mailMe();
