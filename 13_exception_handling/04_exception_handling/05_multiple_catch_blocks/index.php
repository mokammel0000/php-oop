<?php

// A try-catch block can have multiple catch blocks,
// Each catch block will handle a specific exception.

// the order of exception should be from the specific to generic,
// the last catch block should contain the code for handling the most generic exception

try {

    // throw new PDOException();
    // throw new RuntimeException();
    throw new Exception();

} catch (PDOException) {
    echo 'this is a PDO exception <br>';
} catch (RuntimeException) {
    echo 'this is a Runtime exception <br>';
} catch (Exception) {
    echo 'this is a general exception <br>';
}
