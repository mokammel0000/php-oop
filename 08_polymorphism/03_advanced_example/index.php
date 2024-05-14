<?php

require 'Classes/DBMSService.php';
require 'Classes/Postgres.php';
require 'Classes/Mysql.php';

// $my_crud = new DBMSService(new Postgres());
$my_crud = new DBMSService(new Mysql());


$my_crud->insert('users');
$my_crud->show('users');
$my_crud->update('users');
$my_crud->delete('users');
