<?php

// prevouisly we dealed with named classes.

// you can define an anonymous class
// use it in case you need to instantiate just one object - naming it doesn't matter.

// An anonymous can implement one or multiple interfaces.

// An anonymous class can inherit from one named class.
// ------------------------------------------------------------------------------------

// $p1 = new Point(1, 2);
$p1 = new class (4, 5) {
    public function __construct(public float $x, public float $y)
    {
    }

    public function getXandY()
    {

        echo $this->x . '      ' . $this->y . '<br>';
    }
};

$p1->getXandY();


// Internally, PHP generates a name for the anonymous class.
// To get the generated name, you can use the get_class() function.
echo get_class($p1);


// Because an anonymous doesn’t have a declared name, you cannot use the type hint for its instance.
// Point $p2 = new class (){}; // we can't do that
