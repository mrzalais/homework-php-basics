<?php

declare(strict_types=1);

function CheckOddEven(int $x): string
{
    if ($x % 2 != 0) {
        return 'Odd Number' . PHP_EOL;
    } else {
        return 'Even Number' . PHP_EOL;
    }
}

echo CheckOddEven(11);
echo CheckOddEven(10);
