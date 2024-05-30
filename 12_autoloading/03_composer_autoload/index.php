<?php

/**
 * .
 * ├── app
 * │   ├── bootstrap.php
 * │   └── models
 * │       └── User.php
 * │       └── Comment.php
 * |
 * ├── vendor
 * │   ├── composer
 * |   └── autoload.php
 * |
 * ├── composer.json
 * └── index.php
 *
 * 1- put all your code in app folder.
 * 2- add your classes path to composer.json file.
 * 3- run composer dump-autoload: composer will generate a vendor folder.
 * 4- autoload.php file in vendor: will load all classes from both app and external packages.
 * 5- require the autoload.php file in the bootstrap.php file using the require_once construct.
 * 6- require bootstrap file anywhere you need to use any class(userdefined or external).
 *
 * Notes:
 *  -composer.json --> composer autoload-dump --> vendor/autoload.php
 *  -you need to run composer autoload-dump each time you change anything in your app structur.
 *  -bootstrap.php --> use autoload.php to reqire any file you need (also do another things).
 *  -index.php     --> use bootstrap.php to boot your app.
 */

require_once 'app/bootstrap.php';

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';
