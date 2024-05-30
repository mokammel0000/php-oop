<?php

/**
 * "PSR-4: Autoloader":
 * describes a specification for autoloading classes from file paths,
 * which makes it easier to organize and manage code in a standardized way.
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
 *
 * Note: User.php is under the Acme/Auth folder, and User class is namespaced with Acme/Auth
 *       this helps you find a class file more quickly by looking at its namespace...!!
 */

require_once 'app/bootstrap.php';

use Acme\Auth\User as User;
use Acme\Blog\Comment as Comment;

$ahmed = new User('ahmed123', 123);
echo $ahmed->getUserName() . '<br>';
echo $ahmed->getPassword() . '<br>';


$first_comment = new Comment('this is my first comment');
echo $first_comment->getComment() . '<br>';
