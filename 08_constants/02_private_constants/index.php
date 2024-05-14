<?php

class Circle
{
    private const PI = M_PI;  // the default is public

    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return self::PI * $this->radius ** 2;
    }
}

$c1 = new Circle(7);
echo $c1->area();
