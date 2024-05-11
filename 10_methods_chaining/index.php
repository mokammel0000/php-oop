<?php
/**  Method Chaining:
 *  multiple methods are invoked sequentially on the same object instance in a single statement.
 *  each method must return the object itself (this) -> عشان الي بعدها تعرف تتنفذ
 */

class User
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
        echo "User is saved succesfully, name  = {$this->name}, email = {$this->email}";
    }
}


$first_user = new User();
// $first_user->setName('Ahmed');
// $first_user->setEmail('ahmed@ahmed.com');
// $first_user->save();


$first_user->setName('Ahmed')->setEmail('ahmed@ahmed.com')->save();