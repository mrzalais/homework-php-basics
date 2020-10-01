<?php

declare(strict_types=1);

$number = readline("Enter the number: \n");

if ($number > 0) {
    echo "The number ($number) you entered is positive \n";
} elseif ($number < 0) {
    echo "The number ($number) you entered is negative \n";
} else {
    echo "You entered zero, which is neither negative nor positive. \n";
}
