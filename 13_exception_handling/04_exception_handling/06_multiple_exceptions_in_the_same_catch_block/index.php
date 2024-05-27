<?php

// If you have the same logic for handling multiple types of exceptions,
// you can place multiple exceptions in one catch block and separate them by the pipe (|) character

try {
    throw new DOMException();
} catch (DOMException | ErrorException | IntlException | JsonException | LogicException) {
    echo 'we have catched an exception <br>';
}
