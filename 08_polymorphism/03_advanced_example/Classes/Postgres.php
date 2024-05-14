<?php

require 'Interfaces/DBMSInterface.php';

class Postgres implements DBMSInterface
{
    public function insert()
    {
        echo "insert function implementation from Postgres<br>";
    }

    public function update()
    {
        echo "update function implementation from Postgres<br>";

    }

    public function delete()
    {
        echo "delete function implementation from Postgres<br>";
    }

    public function show()
    {
        echo "show function implementation from Postgres<br>";
    }

}
