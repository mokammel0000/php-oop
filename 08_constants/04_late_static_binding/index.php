<?php


class Animal
{
    protected const NUMBER_OF_LIMBS = 4;

    public static function printNumberOfLimbs()
    {
        // return self::NUMBER_OF_LIMBS;
        return static::NUMBER_OF_LIMBS;
    }
}

class Kangaroo extends Animal
{
    protected const NUMBER_OF_LIMBS = 2;
}

echo Animal::printNumberOfLimbs() . '<br>';
echo Kangaroo::printNumberOfLimbs() . '<br>';
