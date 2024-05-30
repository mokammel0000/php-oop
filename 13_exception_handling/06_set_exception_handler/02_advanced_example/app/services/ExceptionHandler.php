<?php


class ExceptionHandler
{
    public static function handle(Exception $ex)
    {
        $time = date('Y-m-d h:i:s');

        $message = "[{$time}] Unhandeled Exception on line {$ex->getLine()}, exception message is {$ex->getMessage()} \n";

        error_log($message, 3, "logs/errors.log");

        echo 'there is unexpected error, please try again';
    }
}
