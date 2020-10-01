<?php

declare(strict_types=1);

$mainArray = [];

for ($i = 1; $i < 10; $i++) {
    array_push($mainArray, rand(1, 100));
}

$copyArray = $mainArray;

array_pop($mainArray);
array_push($mainArray, -7);

echo 'Array 1: ';
foreach ($mainArray as $number) {
    echo "$number ";
}

echo PHP_EOL;

echo 'Array 2: ';
foreach ($copyArray as $number) {
    echo "$number ";
}

echo PHP_EOL;
