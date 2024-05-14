<?php

// __call() method:
// invoked automatically when a non-existing method or inaccessible method is called.
// useful when you want to create a wrapper class that wraps the existing API.

class Person
{
    private function getUserName()
    {
        echo 'the user name is name <br>';
    }

    public function __call($name, $args)
    {
        // you can do any logic in it, not just printing an error message
        echo "method {$name} " .
        (empty($args) ? " " : "with arguments = " . implode('- ', $args)) .
        " is not defined or not accessible <br>";
    }
}



$ahmed = new Person();
$ahmed->getUserName('ahmed', 'esmaiel', 'hussein');  // Fatal error: Call to private method Person::getUserName()
$ahmed->getUserEmail();  // Fatal error: Call to undefined method Person::getUserEmail()
