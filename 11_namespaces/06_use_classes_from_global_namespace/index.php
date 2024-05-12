<?php

// how to use classes from a global namespace in other namespace?

namespace app;

$publish_at = new \DateTime();


echo '<pre>';
var_dump($publish_at);
echo '</pre>';
