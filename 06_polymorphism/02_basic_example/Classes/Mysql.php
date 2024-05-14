<?php

include 'DBMSInterface/DBMSInterface.php';

class Mysql implements DBMSInterface
{
    public function insert($table)
    {
        echo "insert function implementation from Mysql on table {$table} <br>";
    }

    public function update($table)
    {
        echo "update function implementation from Mysql on table {$table} <br>";

    }

    public function delete($table)
    {
        echo "delete function implementation from Mysql on table {$table} <br>";
    }

    public function show($table)
    {
        echo "show function implementation from Mysql on table {$table} <br>";
    }

}
