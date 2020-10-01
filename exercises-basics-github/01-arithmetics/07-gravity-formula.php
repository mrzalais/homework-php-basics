<?php

declare(strict_types=1);

/*
a = acceleration (m/s^2) = -9,81
t = time (s) = 10
vi = initial velocity (m/s) = 0
xi = initial position = 0
*/

$a = -9.81;
$t = 10;
$vi = 0;
$xi = 0;

$distance = 0.5 * ($t = $a * pow($t, 2) + $vi * $t + $xi);

echo "$distance meters \n";
