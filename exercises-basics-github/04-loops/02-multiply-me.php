<?php

declare(strict_types=1);

$number = (int)readline("Input number you want to multiply with itself: \n");
$multiplier = (int)readline("Input number how many times you want to multiply: \n");

$number2 = $number;

for ($i = 1; $i < $multiplier; $i++) {
    $number2 = $number2 * $number;
}

echo $number2 . PHP_EOL;
