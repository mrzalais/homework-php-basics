<?php

declare(strict_types=1);

require_once 'BankAccount.php';

$benson = new BankAccount('Benson', 17.25);

echo $benson->showUsernameAndBalance() . PHP_EOL;

$benson = new BankAccount('Benson', -17.5);

echo $benson->showUsernameAndBalance() . PHP_EOL;
