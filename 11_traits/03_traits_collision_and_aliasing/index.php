<?php

trait FeatureOneTrait
{
    public function feature()
    {
        echo 'feature one <br>';
    }
}

trait FeatureTwoTrait
{
    public function feature()
    {
        echo 'feature two <br>';
    }
}

class MyClass
{
    use FeatureOneTrait, FeatureTwoTrait {

        FeatureOneTrait::feature insteadof FeatureTwoTrait;
        // FeatureTwoTrait::feature insteadof FeatureOneTrait;

        FeatureTwoTrait::feature as SecondFeature;
    }
}

// which method will be used? you need to specify it
$my_object = new MyClass();
$my_object->feature();
$my_object->SecondFeature();
