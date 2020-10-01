<?php

declare(strict_types=1);

function factorial(int $number): int
{
    $num = 1;

    for ($i = $number; $i >= 1; $i--) {
        $num = $num * $i;
    }
    return $num;
}
echo factorial(5);
echo PHP_EOL;
