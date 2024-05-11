<?php

// we define call method in our classes: to handel the cases that any developer 
// call a method that is not defined or not accessable in our class.
class Human
{
    private function getUserName()
    {
        echo 'the user name is name <br>';
    }

    public function __call($name, $arguments)
    {
        echo "method {$name} is not defined or not accessable <br>";
        if (!empty($arguments)) {
            echo 'with arguments: ';
            foreach ($arguments as $arg) {

                echo $arg . '<br>';
            }
        }
    }
}



$ahmed = new Human();
$ahmed->getUserName('ahmed');  // Fatal error: Uncaught Error: Call to private method Human::getUserName()
$ahmed->getUserEmail();  // Fatal error: Uncaught Error: Call to undefined method Human::getUserEmail() 