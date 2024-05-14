<?php

class DBMSService
{
    public function __construct(public DBMSInterface $dbms)
    {
    }
    public function insert()
    {
        return $this->dbms->insert();
    }

    public function update()
    {
        return $this->dbms->update();
    }

    public function delete()
    {
        return $this->dbms->delete();
    }

    public function show()
    {
        return $this->dbms->show();
    }
}
