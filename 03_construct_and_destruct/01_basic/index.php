<?php

class Human
{
    public string $name;
    public int $age;
    public float $weight;

    public function __construct($name, $age, $weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }

    // public function __construct(public string $name, public int $age, public float $weight){
        //مش لازم تعرف المتغيرات فوق حتي، هما بيتعرفوا من هنا
    // }

    public function printDetails()
    {
        echo "name = {$this->name}, age = {$this->age}, weight = {$this->weight}, <br>";
    }
}

// you can define it without any constructors
// $ahmed = new Human;
// var_dump($ahmed);

$ahmed = new Human('ahmed', 20, 181);
$ahmed->printDetails();

$hussein = new Human('hussein', 31, 165);
$hussein->printDetails();
