<?php

declare(strict_types=1);

function check15(int $x, int $y): bool
{
    if ($x == 15 | $y == 15 | $x + $y == 15 | $x - $y == 15) {
        return true;
    } else {
        return false;
    }
}

echo check15(15, 10);
echo "\n";
echo check15(10, 15);
echo "\n";
echo check15(5, 10);
echo "\n";
echo check15(20, 5);
echo "\n";
echo check15(1, 100);
