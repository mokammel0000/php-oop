<?php

include 'Classes/Human.php';

$ahmed = new Human();
$ahmed->setDetails(name: 'ahmed', age: 19, height: 181.5);


echo HUMAN::NUMBER_OF_EYES . '<br>';
echo $ahmed::NUMBER_OF_EYES. '<br>';

$ahmed->getDetails();