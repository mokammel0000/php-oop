<?php

interface DBMSInterface
{
    public function insert($table);

    public function update($table);

    public function delete($table);

    public function show($table);
}
