<?php

declare(strict_types=1);

for ($i = 1; $i <= 110; $i++) {

    switch ($i) {
        // Checking if number is a multiply of 3, and not a multiply of 5, 7
        case ($i % 3 == 0 && $i % 5 !== 0 && $i % 7 !== 0):
            echo 'Coza ';
            break;

        // Checking if number is a multiply of 5 and not a multiply of 3
        case ($i % 5 == 0 && $i % 3 !== 0):
            echo 'Loza ';
            break;

        // Checking if number is a multiply of 7 and not a multiply of 3
        case ($i % 7 == 0 && $i % 3 !== 0):
            echo 'Woza ';
            break;

        // Checking if number is a multiply of 3, and 5
        case ($i % 3 == 0 && $i % 5 == 0):
            echo 'CozaLoza ';
            break;

        // Checking if number is a multiply of 3, and 7
        case ($i % 7 == 0 && $i % 3 == 0):
            echo 'CozaWoza ';
            break;
        // If none of the cases above are true, output the number of iteration
        default:
            echo "$i ";
    }
    // Checking if 12 number in line
    if ($i % 11 == 0) {
        echo "\n";
    }
}