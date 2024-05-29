<?php

// Throwable is an interface: both Error and Exception classes implement this interface,

// use \ before Throwable class: to match the global Throwable (PHP's built-in interface)
// ده في حالة إنك عامل كلاس تاني بنفس الاسم مثلا وعاوز تحدد إنك عاوز بتاع اللغة

try {
    require 'ahmed.php';

} catch (\Throwable $th) { // Handling errors
    echo '<pre>';
    var_dump($th);
    echo '</pre>';
}

try {
    $f = fopen('data.csv', 'r');

} catch (\Throwable $th) { // Handling exceptions
    echo '<pre>';
    var_dump($e);
    echo '</pre>';
}
