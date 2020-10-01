<?php

declare(strict_types=1);

function sumBetween(int $x, int $y): string
{
    $sum = 0;
    for ($i = $x; $i <= $y; $i++) {
        $sum += $i;
    }

    $average = ($x + $y) / 2;

    return "The sum of $x to $y is $sum \nThe average is $average \n";
}

echo sumBetween(1, 100);
