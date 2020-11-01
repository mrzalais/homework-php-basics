<?php

declare(strict_types=1);

require_once 'DataCompiler.php';

$dataAnalysis = new DataCompiler(12467, 0.14, 0.64);

$dataAnalysis->calculateEnergyDrinkers();

echo 'Total number of people surveyed ' . $dataAnalysis->surveyed() . PHP_EOL;
echo 'Approximately ' . $dataAnalysis->calculateEnergyDrinkers() . ' bought at least one energy drink' . PHP_EOL;
echo $dataAnalysis->calculatePreferCitrus() . ' of those ' . 'prefer citrus flavored energy drinks.' . PHP_EOL;
