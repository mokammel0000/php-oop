<?php

class Model
{
    protected const TABLE_NAME = '';

    public static function all()
    {
        echo "INSERT * INTO " . self::TABLE_NAME . '<br>';   // we can't use self here
        echo "INSERT * INTO " . static::TABLE_NAME . '<br>';
    }
}

class User extends Model
{
    protected const TABLE_NAME = 'users';

}

class Role extends Model
{
    protected const TABLE_NAME = 'roles';

}

User::all();
Role::all();
