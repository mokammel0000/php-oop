<?php

/**
 * .                        // this is the root of your project
 * ├── app
 * │   ├── bootstrap.php
 * │   └── models
 * │       └── User.php
 * │       └── Comment.php
 * └── index.php
 */

require_once 'app/bootstrap.php';
// bootstarp.php loads all your classes, so it's important to require it before anything.

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';
