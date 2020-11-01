<?php

declare(strict_types=1);

require_once 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

function swapPoints(Point $pointA, Point $pointB)
{
    $keepX = $pointA->x;
    $keepY = $pointA->y;

    $pointA->x = $pointB->x;
    $pointA->y = $pointB->y;

    $pointB->x = $keepX;
    $pointB->y = $keepY;
}

swapPoints($p1, $p2);

echo '(' . $p1->x . ', ' . $p1->y . ')' . PHP_EOL;
echo '(' . $p2->x . ', ' . $p2->y . ')' . PHP_EOL;
