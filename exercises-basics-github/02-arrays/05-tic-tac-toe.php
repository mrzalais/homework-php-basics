<?php

declare(strict_types=1);

$gameArray =
    [
        [
            ' ', ' ', ' '
        ],
        [
            ' ', ' ', ' '
        ],
        [
            ' ', ' ', ' '
        ]
    ];

$input = 'Y';

$turn = 1;

$gameStatus = 0;

display_board($gameArray);

while ($turn < 10) {

    $coordinates = [];

    $turnMaker = whoseTurn($turn);

    $rowColumn = userInput($turnMaker);

    $coordinates = checkCoordinate($rowColumn, $gameArray, $turnMaker);

    $gameArray[$coordinates[0]][$coordinates[1]] = $turnMaker;

    display_board($gameArray);

    $gameStatus = checkWinX($gameArray);

    if ($gameStatus == 1) {

        echo "X won\n";
        exit;
    }

    $gameStatus = checkWinO($gameArray);

    if ($gameStatus == 2) {
        echo "O won \n";
        exit;
    }

    $turn++;
}

$gameStatus = isTurnTen($turn);

if ($gameStatus == 1) {
    echo "It's a draw\n";
    echo "GAME OVER!\n";
}

//----------------------------------------------------------------------------------------------------------------------
// functions section

function display_board(array $gameArray): void
{
    echo "          Columns  \n";
    echo "         0   1   2 \n";
    echo "Row 0    " . $gameArray[0][0] . " | " . $gameArray[0][1] . " | " . $gameArray[0][2] . "\n";
    echo "        ---+---+---\n";
    echo "Row 1    " . $gameArray[1][0] . " | " . $gameArray[1][1] . " | " . $gameArray[1][2] . "\n";
    echo "        ---+---+---\n";
    echo "Row 2    " . $gameArray[2][0] . " | " . $gameArray[2][1] . " | " . $gameArray[2][2] . "\n";
}

function isTurnTen(int $turn): int
{
    if ($turn == 10) {
        return $gameStatus = 1;
    } else {
        return $gameStatus = 0;
    }
}

function whoseTurn(int $turn): string
{
    if ($turn % 2 != 0) {
        return 'X';
    } else {
        return 'O';
    }
}

function userInput(string $turnMaker): string
{
    $rowColumn = '';
    while (strlen($rowColumn) != 3) {
        return $rowColumn = readline("Enter where you want to place $turnMaker (row column): ");
    }
}

function checkCoordinate(string $stringCoordinate, array $gameArray, string $turnMaker): array
{
    $coordinates = explode(' ', $stringCoordinate);

    while ($gameArray[$coordinates[0]][$coordinates[1]] != ' ') {
        echo "Someone took that spot already, try elsewhere \n";
        $rowColumn = readline("Enter where you want to place $turnMaker (row column): ");
        $coordinates = explode(' ', $rowColumn);
    }
    return $coordinates;
}

function checkWinX(array $gameArray)
{
    if ($gameArray[0][0] == 'X' && $gameArray[0][1] == 'X' && $gameArray[0][2] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[1][0] == 'X' && $gameArray[1][1] == 'X' && $gameArray[1][2] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[2][0] == 'X' && $gameArray[2][1] == 'X' && $gameArray[2][2] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[0][0] == 'X' && $gameArray[1][0] == 'X' && $gameArray[2][0] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[0][1] == 'X' && $gameArray[1][1] == 'X' && $gameArray[2][1] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[0][2] == 'X' && $gameArray[1][2] == 'X' && $gameArray[2][2] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[0][0] == 'X' && $gameArray[1][1] == 'X' && $gameArray[2][2] == 'X') {
        echo "X won \n";
        return 1;
    }
    if ($gameArray[2][0] == 'X' && $gameArray[1][1] == 'X' && $gameArray[0][2] == 'X') {
        echo "X won \n";
        return 1;
    }
}

function checkWinO(array $gameArray)
{
    if ($gameArray[0][0] == 'O' && $gameArray[0][1] == 'O' && $gameArray[0][2] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[1][0] == 'O' && $gameArray[1][1] == 'O' && $gameArray[1][2] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[2][0] == 'O' && $gameArray[2][1] == 'O' && $gameArray[2][2] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[0][0] == 'O' && $gameArray[1][0] == 'O' && $gameArray[2][0] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[0][1] == 'O' && $gameArray[1][1] == 'O' && $gameArray[2][1] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[0][2] == 'O' && $gameArray[1][2] == 'O' && $gameArray[2][2] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[0][0] == 'O' && $gameArray[1][1] == 'O' && $gameArray[2][2] == 'O') {
        echo "O won \n";
        return 2;
    }
    if ($gameArray[2][0] == 'O' && $gameArray[1][1] == 'O' && $gameArray[0][2] == 'O') {
        echo "O won \n";
        return 2;
    }
}

//----------------------------------------------------------------------------------------------------------------------
