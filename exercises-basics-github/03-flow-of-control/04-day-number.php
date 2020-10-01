<?php

declare(strict_types=1);

$dayNumber = 0;

$allDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

if ($dayNumber >= 0 && $dayNumber <= 6) {
    echo $allDays[$dayNumber] . PHP_EOL;
} else {
    echo "Not a valid day \n";
}