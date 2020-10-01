<?php

declare(strict_types=1);

class RollTwoDice
{
    function gimmeSum()
    {
        $sum = 0;
        $diceSum = 0;

        while ($sum < 2 || $sum > 12)
        {
            $sum = readline("Enter the sum you desire (2-12): ");
        }

        while ($sum != $diceSum) {
            $dice1 = rand(1,6);
            $dice2 = rand(1,6);
            $diceSum = $dice1 + $dice2;
            echo "$dice1 and $dice2 = $diceSum". PHP_EOL;
        }
    }
}

$test = new RollTwoDice();
$test->gimmeSum();