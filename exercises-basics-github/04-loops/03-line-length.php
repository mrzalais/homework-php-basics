<?php

declare(strict_types=1);

$string1 = readline("Enter the first word: \n");
$string2 = readline("Enter the second word: \n");

$stringLength = strlen($string1 . $string2);

echo $string1;

$dots = '';

for ($i = 1; $i <= 30 - $stringLength; $i++) {
    echo $dots = '.';
}

echo $string2 . PHP_EOL;
