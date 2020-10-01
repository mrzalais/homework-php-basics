<?php

declare(strict_types=1);

function calculateBMI(int $weight, int $height): ?string
{
    $BMI = $weight * 2.2046 * 703 / pow($height / 2.54, 2);
    if ($BMI >= 18.5 && $BMI <= 25) {
        return "Your BMI($BMI) is optimal\n";
    } else if ($BMI > 25) {
        return "Your BMI($BMI) indicates you're overweight\n";
    } else {
        return "Your BMI($BMI) indicates you're underweight\n";
    }
}

echo calculateBMI(70, 175);
echo calculateBMI(30, 175);
echo calculateBMI(200, 175);
