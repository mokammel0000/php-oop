<?php

/**
 * you can use Composer for autoloading classes.
 *
 * .
 * ├── app
 * │   ├── bootstrap.php
 * │   └── models
 * │       └── User.php
 * │       └── Comment.php
 * ├── composer.json
 * └── index.php
 *
 *
 * composer will load classes from models folder (you can add more folders to it).
 * run `composer dump-autoload` in you project terminal.
 * composer will generate a directory called vendor
 *  load the autoload.php file in the bootstrap.php file using the require_once construct:
 */

require_once 'app/bootstrap.php';
// bootstrap.php loading the autoload.php from vendor - so it loads all your dependancies.

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';

// if you need to use a new class:
// 1- add it to models folder (or even other model)
// 2- run composer dump-autoload to add this class to autoload.php filr
