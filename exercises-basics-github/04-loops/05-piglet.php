<?php

declare(strict_types=1);

class Piglet
{
    public function startPiglet()
    {
        echo "Welcome to Piglet! \n";

        $ptsTotal = 0;

        $yesOrNo = 'Y';

        while (ucfirst($yesOrNo) != 'N') {

            $userRNG = rand(1, 6);
            if ($userRNG == 1) {
                echo "You rolled 1, you lost, got 0 points \n";
                exit("Thanks for playing! \n");
            }

            echo "You rolled a $userRNG! \n";

            $ptsTotal = $ptsTotal + $userRNG;

            echo "Current total points: $ptsTotal \n";

                $yesOrNo = readline("Roll again? Y (Yes - default) / N (No) \n");
                if (ucfirst($yesOrNo) == 'N') {
                    echo "$ptsTotal";
                    exit("Thanks for playing! \n");
                }
            }
        }
}

$test = new Piglet();
$test->startPiglet();
