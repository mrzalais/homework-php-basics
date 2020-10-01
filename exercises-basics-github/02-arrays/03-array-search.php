<?php

declare(strict_types=1);

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

$userInput = readline("Enter the value to search for: ");

if (array_search($userInput, $numbers)) {
    echo "The number ($userInput) exists in array " . '$numbers' . " \n";
} else {
    echo "The number ($userInput) doesn't exist in array " . '$numbers :(' . " \n";
}
