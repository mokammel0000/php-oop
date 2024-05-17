<?php

// require_once 'models/User.php';


spl_autoload_register(function ($class_name) {

    // $file_path = "app/models/" . $class_name . ".php";
    $file_path = "./app/models/" . $class_name . ".php";
    // $file_path = "../app/models/" . $class_name . ".php";

    if (file_exists($file_path)) {
        require $file_path;
    }
});
