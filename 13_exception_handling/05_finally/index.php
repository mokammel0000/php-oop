<?php

// finally is an optional block of the try…catch statement.
// finally block always executes after the try or catch block.

// the code in finally block will be executed regardless there is an Exception in try block or not

// either the catch or finally block is optional (you must use one, or both of them)
// you can use more than one catch block


try {
    echo 'Hello in my Application <br>';
    // throw new RuntimeException();
} catch (\Throwable $th) {
    echo 'There is an exception <br>';
} finally {
    echo 'This is an statement from FINALLY block <br>';
}


try {
    echo 'Hello in my Application <br>';
    throw new RuntimeException();
} finally {
    echo 'This is an statement from FINALLY block <br>';
}
