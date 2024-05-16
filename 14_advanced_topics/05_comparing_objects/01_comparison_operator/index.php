<?php

// Two objects are equal if
// 01- they was instances of the same class
// 02- they contain the same values

class Point
{
    public function __construct(private float $x, private float $y)
    {
    }
}

$p1 = new Point(1, 2);

$p2 = new Point(1, 2);

$p3 = $p1;

$p4 = new Point(1.5, 3.4);

if ($p1 == $p2) {
    echo 'p1 and p2 are equal. <br>';
} else {
    echo 'p1 and p2 are not equal. <br>';
}

if ($p1 == $p3) {
    echo 'p1 and p3 are equal. <br>';
} else {
    echo 'p1 and p3 are not equal. <br>';
}

if ($p1 == $p4) {
    echo 'p1 and p4 are equal. <br>';
} else {
    echo 'p1 and p4 are not equal. <br>';
}
