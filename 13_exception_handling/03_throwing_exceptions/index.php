<?php

// throw keyword can accept any class [that implements Throwable Interface]
//   (either it was Exception or Error or any of their subclasses).

function divide(int $x, int $y)
{
    if(!is_numeric($x) || !is_numeric($x)) {
        throw new InvalidArgumentException('the 2 Arguments must be numbers', 2);

    } elseif($y == 0) {
        throw new Exception("you can't devide by 0", 0);

    } else {
        return $x / $y;

    }
}

echo divide('ahmed', 0);
