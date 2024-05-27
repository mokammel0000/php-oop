<?php

// try-catch doesn't handle warnings, it just handles errors

try {
    require 'ahmed.php'; // it is a fatal error, but program will be executed (with a warning).

} catch (\Error $e) {
    // Handle errors specifically  (does not catch exceptions)
    echo $e->getMessage() . '<br>';
}
