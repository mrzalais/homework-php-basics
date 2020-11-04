<?php

declare(strict_types=1);

require_once 'FuelGauge.php';
require_once 'Odometer.php';

$car = new FuelGauge(0);

echo 'Current amount of fuel ' . $car->getFuel() . PHP_EOL;

sleep(1);

echo 'Starting to fill the tank with fuel' . PHP_EOL;

sleep(1);

for ($i = 0; $i < 10; $i++) {
    if ($car->getFuel() < 70) {
        echo 'Current amount of fuel ' . $car->increaseFuel() . PHP_EOL;
        sleep(1);
    } else {
        echo 'Fuel tank is already full' . PHP_EOL;
        break;
    }
}

echo 'Finished filling the tank with fuel' . PHP_EOL;

echo 'Current amount of fuel ' . $car->getFuel() . PHP_EOL;

$odometerReset = new Odometer(999998);

echo 'Doing an odometer reset test' . PHP_EOL;

sleep(1);

for ($i = 0; $i < 5; $i++) {
    echo 'Odometer: ' . $odometerReset->increaseOdometer() . PHP_EOL;
    sleep(1);
}

echo 'Going for a ride' . PHP_EOL;

sleep(1);

$odometer = new Odometer(30000);

$km = 0;

while ($car->getFuel() > 0) {
    echo $odometer->increaseOdometer() . PHP_EOL;
    $km++;
    if ($km % 10 === 0) {
        $car->consumeFuel();
    }
    echo 'Current fuel: ' . $car->getFuel();
    echo PHP_EOL;
    sleep(1);
}

if ($car->getFuel() === 0) {
    echo 'This vehicle is out of fuel';
}
