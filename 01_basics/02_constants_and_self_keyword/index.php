<?php

class Human
{
    const NUMBER_OF_EYES = 2;

    public function getDetails()
    {
        // calling inside the class itself: 
        echo  Self::NUMBER_OF_EYES . '<br>';    // self refer to the class which it's written in.
        echo  static::NUMBER_OF_EYES . '<br>';  // static refer to the class which it's called from.
                                                // the real difference will appear in Inheritance.
    }
}
$ahmed = new Human();

// calling outside the class: 
// we can call constant members either from an object, or from the class itself.
echo HUMAN::NUMBER_OF_EYES . '<br>';
echo $ahmed::NUMBER_OF_EYES . '<br>';

$ahmed->getDetails();
