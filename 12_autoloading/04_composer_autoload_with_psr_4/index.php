<?php

/**
 * composer.json --> composer autoload-dump-> vendor/autoload.php
 * vendor/autoload.php (in this file all your program need to autoload files from different paths)
 *       you need to run composer autoload-dump each time you change anything in your app structur.
 * bootstrap.php --> use autoload.php to reqire any file you need.
 * index.php    --> use bootstrap.php to boot your app.
 *
 *
 * To comply with PSR-4, you need to structure the previous application like this:
 * .
 * ├── app
 * │   ├── Acme
 * │   │   ├── Auth
 * │   │   │   └── User.php
 * │   │   └── Blog
 * │   │       └── Comment.php
 * │   └── bootstrap.php
 * ├── composer.json
 * └── index.php
 *
 * note that: User.php is under the Acme/Auth folder, and User class is namespaced with Acme/Auth
 * This  helps you find a class file more quickly by looking at its namespace...!!
 *
 */

require_once 'app/bootstrap.php';

use Acme\Auth\User as User;
use Acme\Blog\Comment as Comment;

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';
