<?php

declare(strict_types=1);

require_once 'Dog.php';
require_once 'DogTest.php';

$dogs = new DogTest();

$dogs->addDog($max = new Dog('Max', 'male', 'Lady', 'Rocky'));
$dogs->addDog($rocky = new Dog('Rocky', 'male', 'Molly', 'Sam'));
$dogs->addDog($sparky = new Dog('Sparky', 'male'));
$dogs->addDog($buster = new Dog('Buster', 'male', 'Lady', 'Sparky'));
$dogs->addDog($sam = new Dog('Sam', 'male'));
$dogs->addDog($lady = new Dog('Lady', 'female'));
$dogs->addDog($molly = new Dog('Molly', 'female'));
$dogs->addDog($coco = new Dog('Coco', 'female', 'Molly', 'Buster'));

echo $coco->fathersName() . PHP_EOL;

echo $sparky->fathersName() . PHP_EOL;

echo $coco->HasSameMotherAs($rocky) . PHP_EOL;
