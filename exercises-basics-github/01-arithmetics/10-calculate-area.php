<?php

declare(strict_types=1);

echo "Geometry Calculator \n";
echo "1. Calculate the Area of a Circle \n";
echo "2. Calculate the Area of a Rectangle \n";
echo "3. Calculate the Area of a Triangle \n";
echo "4. Quit \n";

$choice = 0;

while ($choice < 1 | $choice > 4) {
    $choice = (int)readline("Enter your choice (1-4): ");
}

switch ($choice) {
    case 1:
        $r = 0;
        while ($r <= 1) {
            $r = (int)readline("Enter the radius: ");
        }
        echo $circleArea = M_PI * $r * 2 . PHP_EOL;
        break;
    case 2:
        $l = -1;
        $w = -1;
        while ($l < 0) {
            $l = (int)readline("Enter the length: ");
        }
        while ($w < 0) {
            $w = (int)readline("Enter the width: ");
        }
        echo $rectangleArea = $l * $w . PHP_EOL;
        break;
    case 3:
        $base = -1;
        $h = -1;
        while ($base < 0) {
            $base = (int)readline("Enter the base : ");
        }
        while ($h < 0) {
            $h = (int)readline("Enter the height: ");
        }
        echo $triangleArea = $base * $h * 0.5 . PHP_EOL;
        break;
    default:
        break;
}
