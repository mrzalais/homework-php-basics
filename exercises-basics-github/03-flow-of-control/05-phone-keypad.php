<?php

declare(strict_types=1);

$forwardInput = userInput();
echo giveMeNumbers($forwardInput) . PHP_EOL;

function userInput(): string
{
    $userInput = (string)readline("Enter a word: ");
    return $upperCaseInput = strtoupper($userInput);
}

function giveMeNumbers(string $string): string
{
    $number = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $letter = substr("$string", $i, 1);
        switch ($letter) {
            case $letter == 'A' || $letter == 'B' || $letter == 'C':
                $number = $number . '2';
                break;
            case $letter == 'D' || $letter == 'E' || $letter == 'F':
                $number = $number . "3";
                break;
            case $letter == 'G' || $letter == 'H' || $letter == 'I':
                $number = $number . "4";
                break;
            case $letter == 'J' || $letter == 'K' || $letter == 'L':
                $number = $number . "5";
                break;
            case $letter == 'M' || $letter == 'N' || $letter == 'O':
                $number = $number . "6";
                break;
            case $letter == 'P' || $letter == 'Q' || $letter == 'R' || $letter == 'S':
                $number = $number . "7";
                break;
            case $letter == 'T' || $letter == 'U' || $letter == 'V':
                $number = $number . "8";
                break;
            case $letter == 'W' || $letter == 'X' || $letter == 'Y' || $letter == 'Z':
                $number = $number . "9";
                break;
            default:
                echo("Invalid input");
        }
    }
    return $number;
}