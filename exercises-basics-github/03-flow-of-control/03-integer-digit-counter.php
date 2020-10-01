<?php

declare(strict_types=1);

if (ctype_digit($input = readline("Enter a positive number: \n"))) {
    echo $inputLength = strlen((string)$input) . PHP_EOL;
}
