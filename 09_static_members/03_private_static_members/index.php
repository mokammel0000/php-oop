<?php


class App
{
    private static $app = null; // the default is public

    private function __construct()  // private construcotr, you can't use it, only class itself can use it
    {
    }

    public static function get(): App
    {
        if (!self::$app) {
            self::$app = new App();
        }

        return self::$app;
    }
}

var_dump(App::get());
