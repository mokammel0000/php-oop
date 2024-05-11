<?php 

require "Classes/Mysql.php";
require "Classes/Postgres.php";

$my_crud = new Postgres();

$my_crud->insert('users');
$my_crud->update('users');
$my_crud->delete('users');
$my_crud->show('users');