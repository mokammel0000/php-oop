<?php

try {
    $pdo = new PDO('', '', '');

    // } catch (PDOException $e) {
} catch (Exception $e) {
    // Handle exceptions (does not catch errors)

    echo $e->getMessage() . '<br>';
    echo $e->getCode() . '<br>';
    echo $e->getFile() . '<br>';
    echo $e->getline() . '<br>';

    echo '<pre>';
    print_r($e->getTrace()); // all about the error
    echo '</pre>';
}
