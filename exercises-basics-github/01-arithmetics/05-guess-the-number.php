<?php

declare(strict_types=1);

$computerNumber = rand(1, 100);

$playerNumber = (int) readline("I'm thinking of a number between 1-100. Try to guess it.");

if ($playerNumber > $computerNumber) {
    echo "Sorry, you guessed too high. I was thinking of $computerNumber.\n";
} elseif ($playerNumber < $computerNumber) {
    echo "Sorry, you guessed too low. I was thinking of $computerNumber.\n";
} else {
    echo "You guessed it!  What are the odds?!?\n";
}
