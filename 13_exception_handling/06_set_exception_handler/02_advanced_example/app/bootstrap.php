<?php

spl_autoload_register(function ($class_name) {

    $file_path = "app/services/" . $class_name . ".php";
    if (file_exists($file_path)) {
        require $file_path;
    }
});

// require "services/ExceptionHandler.php";

set_exception_handler(['ExceptionHandler', 'handle']);
