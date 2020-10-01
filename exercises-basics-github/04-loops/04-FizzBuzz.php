<?php

declare(strict_types=1);

class FizzBuzz
{

    public function printNumbers()
    {
        $userInteger = readline("Enter an integer: \n");

        for ($i = 1; $i <= $userInteger; $i++) {

            switch ($i) {

                // Checking if number is a multiply of 3, and not a multiply of 5, 7
                case ($i % 3 == 0 && $i % 5 !== 0):
                    echo 'Fizz ';
                    break;

                // Checking if number is a multiply of 5 and not a multiply of 3
                case ($i % 5 == 0 && $i % 3 !== 0):
                    echo 'Buzz ';
                    break;

                // Checking if number is a multiply of 3, and 5
                case ($i % 3 == 0 && $i % 5 == 0):
                    echo 'FizzBuzz ';
                    break;

                default:
                    echo "$i ";
            }
            if ($i % 20 == 0) {
                echo "\n";
            }
        }
    }
}

$test = new FizzBuzz();
$test->printNumbers();
