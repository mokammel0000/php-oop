<?php

// As of PHP 8.0, the variable name for the caught exception is optional like this:
// لو محتاجه عشان تطلع منه معلومات حطه، لو مش محتاجه في حاجه مش لازم تعرفه أصلا

try {
    throw new LogicException('this is a logic exception', 300);
} catch (Exception) {
    echo 'we have handled a logic exception <br>';
}
// In this case, the catch block will still execute but won’t have access the Exception object.
