<?php

/**
 * .
 * ├── app
 * │   ├── bootstrap.php
 * │   └── models
 * │       └── User.php
 * │       └── Comment.php
 * └── index.php
 *
 *
 * app folder: contain all your classes.
 * bootstrap file:
 *          -autoload all your classes (manually).
 *          -use it anywhere you need to use any class.
 * index file: the main entry point for the application for the web server (Apache).
 */

require_once 'app/bootstrap.php'; // require it before anything.

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';
