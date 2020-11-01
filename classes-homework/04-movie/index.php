<?php

declare(strict_types=1);

require_once 'Movie.php';

$movieArray = [
    new Movie('Casino Royal', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG')
];

function getPG(array $names): array
{
    $moviesPG13 = [];

    foreach ($names as $movie) {
        if ($movie->rating === 'PG13') {
            $moviesPG13 [] = $movie;
        }
    }

    return $moviesPG13;
}

$moviesPG13 = (getPg($movieArray));

echo 'Currentl available PG13 movies: ' . PHP_EOL;

foreach ($moviesPG13 as $movie) {
    echo $movie->title() . PHP_EOL;
}
