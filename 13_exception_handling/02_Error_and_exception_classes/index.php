<?php

// Exception and Error are just classes,
// you can instantiate them with [new] keyword:

$exception = new Exception('this is a new exception', 5012);

echo $exception->getMessage() . '<br>';
echo $exception->getCode() . '<br>';
echo $exception->getFile() . '<br>';
echo $exception->getLine() . '<br>';
print_r($exception->getTrace());   // array

echo '<pre>';
var_dump($exception);
echo '</pre>';


$error = new Error('This is a new Error', 8);
echo '<pre>';
var_dump($exception);
echo '</pre>';
