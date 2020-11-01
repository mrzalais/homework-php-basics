<?php

declare(strict_types=1);

require_once 'Product.php';

$banana = new Product('Banana', 1.1, 13);
$mouse = new Product('Logitech mouse', 70.00, 14);
$phone = new Product('iPhone 5s', 999.99, 3);
$projector = new Product('Epson EB-U05', 440.46, 1);

//Print product

echo 'Product: ' . $banana->printProduct() . PHP_EOL;
echo 'Product: ' . $mouse->printProduct() . PHP_EOL;
echo 'Product: ' . $phone->printProduct() . PHP_EOL;
echo 'Product: ' . $projector->printProduct() . PHP_EOL;

//Increase price

$banana->increasePrice(0.1);

echo 'Price: ' . $banana->getPrice() . PHP_EOL;

//Increase amount

$banana->increaseAmount(3);

echo 'Amount: ' . $banana->getAmount() . PHP_EOL;
