<?php

// you can load classes manually, or using spl_autoload_register.
// require_once 'models/User.php';

spl_autoload_register(function ($class_name) {

    // $file_path = "app/models/" . $class_name . ".php";
    $file_path = "./app/models/" . $class_name . ".php";
    // $file_path = "../app/models/" . $class_name . ".php";

    if (file_exists($file_path)) {
        require $file_path;
    }
});
