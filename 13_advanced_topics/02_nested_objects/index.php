<?php


require 'Classes/UserProfile.php';
require 'Classes/User.php';


$first_user = new User('ahmed123');
$first_user->setProfile(new UserProfile('ahmed@ahmed.com', '01010101010'));
$first_user->getProfile()->changeEmail('ahmed23@gmail.com');


echo '<pre>';
print_r($first_user->getProfile()) ;
echo '</pre>';
