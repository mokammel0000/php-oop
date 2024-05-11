<?php 
// include 'DBMSInterface/DBMSInterface.php';

class Postgres implements DBMSInterface
{
    public function insert($table)
    {
        echo "insert function implementation from Postgres <br>";
    }
    
    public function update($table)
    {
        echo "update function implementation from Postgres <br>";

    }
    
    public function delete($table)
    {
        echo "delete function implementation from Postgres <br>";
    }
    
    public function show($table)
    {
        echo "show function implementation from Postgres <br>";
    }

}