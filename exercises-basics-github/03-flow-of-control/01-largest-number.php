<?php

declare(strict_types=1);

$firstNumber = readline("Input the 1st number: \n");

$secondNumber = readline("Input the 2nd number: \n");

$thirdNumber = readline("Input the 3rd number: \n");

echo max($firstNumber, $secondNumber, $thirdNumber) . PHP_EOL;
