<?php

declare(strict_types=1);

$words = ["though", "common", "nails", "lay", "straw", "change",
    "planning", "topic", "try", "ancient", "composed", "object",
    "were", "adventure", "tobacco", "fastened", "protection", "slip",
    "sunlight", "sheep", "motion", "fairly", "atmosphere", "needed",
    "income", "dark", "truth", "stay", "taste", "night",
    "not", "want", "rose", "spend", "shown", "aboard",
    "seen", "ruler", "ride", "activity", "movie", "pole"];


$input = 'Y';

while (strtolower($input) == 'y') {
    $word = getWord($words);
    echo $word;
    $tries = 3;

    $right = 0;

    $missedLetters = '';

    $game = 1;

    $missedLettersArr = [];

    $letter = [];

    $pos = '';

    $guessedLetters = [];

    startGame($word);

    while ($tries > 0) {

        $guess = userInput();

        $x = checkGuess($guess, $word);

        if ($x == 0) {
            array_push($missedLettersArr, $guess);
            $missedLetters = implode('', $missedLettersArr);
            $tries--;
        } else {
            array_push($guessedLetters, $guess);
        }

        printScreen($word, $guessedLetters);

        printLowerScreen($missedLetters, $guess);

        $game = checkTries($tries);

        $game = checkWin($guessedLetters, $word);

        if ($game == 0) {

            echo "You lost \n";
            break;
        }

        if ($game == 2)
        {
            echo "You won \n";
            break;
        }
    }

    $input = readline('Want to try again?(Y/N)' . "\r");
}

function getWord(array $words): string
{
    return $word = $words[rand(0, count($words) - 1)];
}

function startGame(string $printWord): void
{
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n\n";
    echo 'Word: ';
    for ($i = 0; $i < strlen($printWord); $i++) {
        echo '_ ';
    }

    echo "\n\n";
    echo "Misses: \n\n";
    echo "Guess: \n\n";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n";
}


function userInput(): string
{
    $guess = "";
    while (strlen($guess) !== 1) {
        $guess = readline("Guess any letter of the word: \n");
        //should only accept letters
    }
    return $guess = strtolower($guess);
}

function checkGuess(string $guess, string $word): int
{
    if (strpos($word, $guess) !== false) {
        return 1;
    } else {
        return 0;
    }
}


function printScreen(string $printWord, array $guessedLetters): void
{
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n\n";
    echo 'Word: ';
    for ($i = 0; $i < strlen($printWord); $i++) {
        if (in_array($printWord[$i], $guessedLetters) != true) {
            echo '_ ';
        } else {
            echo "$printWord[$i] ";
        }
    }
    echo "\n\n";
}

function printLowerScreen($missedLetters, $guess): void
{
    echo "Misses:" . $missedLetters . "\n\n";
    echo "Guess: $guess  \n\n";
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=- \n";
}

function checkWin(array $guessedLetters, string $word): int
{
    if (count($guessedLetters) == strlen($word))
    {
        return 2;
    } else {
        return 1;
    }
}

function checkTries($tries): int
{
    if ($tries > 0) {
        echo "You have $tries tries left \n";
        return 1;
    } else {
        return 0;
    }
}
