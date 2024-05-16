<?php
/**  Method Chaining:
 *  multiple methods are invoked sequentially on the same object instance in a single statement.
 *  each method must return the object itself (this) -> عشان الي بعدها تعرف تتنفذ
 */

class Person
{
    public $name;
    public $email;

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function save()
    {
        echo "Person is saved succesfully, name  = {$this->name}, email = {$this->email}";
    }
}


$first_Person = new Person();
// $first_Person->setName('Ahmed');
// $first_Person->setEmail('ahmed@ahmed.com');
// $first_Person->save();


$first_Person->setName('Ahmed')->setEmail('ahmed@ahmed.com')->save();
