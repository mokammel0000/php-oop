<?php

// Two objects are identical if and only if both of them reference the same instance of a class.

class Point
{
    public function __construct(private float $x, private float $y)
    {
    }
}

$p1 = new Point(1, 2);

$p2 = new Point(1, 2);

$p3 = $p1;


if ($p1 === $p2) {
    echo 'p1 and p2 are identical. <br>';
} else {
    echo 'p1 and p2 are not identical. <br>';
}

if ($p1 === $p3) {
    echo 'p1 and p3 are identical. <br>';
} else {
    echo 'p1 and p3 are not identical. <br>';
}
