<?php

declare(strict_types=1);

class NumberSquare
{
    function getRange()
    {
        //Prompt for input
        $min = readline("Enter the starting number: ");
        $max = readline("Enter the ending number: ");

        //Create string $min to $max with numbers inbetween
        $start = strval($min);

        $middle = '';

        for ($i = $min + 1; $i < $max; $i++) {
            $middle = $middle . $i;
        }

        $end = strval($max);

        $fullString = $start . $middle . $end;

        //Get string length for rotate function

        $N = strlen($fullString);

        function rotate_string($fullString, $N)
        {
            echo $fullString . PHP_EOL;
            for ($i = 0; $i < $N - 1; $i++) {
                {
                    $rotateByOne = substr($fullString, 1) . substr($fullString, 0, 1);
                }
                echo $rotateByOne . PHP_EOL;
                $fullString = $rotateByOne;
            }
        }

        rotate_string($fullString, $N);
    }
}

$test = new NumberSquare();
$test->getRange();