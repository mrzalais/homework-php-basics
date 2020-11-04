<?php

declare(strict_types=1);

require 'Account.php';

$mattsAccount = new Account("Matt's account", 1000.00);
$myAccount = new Account("My account", 0.00);

echo "Initial state (Matt's account): ";
echo $mattsAccount->getBalance() . PHP_EOL;
echo "My state (Matt's account): ";
echo $myAccount->getBalance() . PHP_EOL;

echo PHP_EOL;

//with separate methods

$mattsAccount->withdraw(100);
echo "Matt's account balance now is: " . $mattsAccount->getBalance() . PHP_EOL;
$myAccount->deposit(100);
echo "My account balance now is: " . $myAccount->getBalance() . PHP_EOL;

echo PHP_EOL;

echo "Final state (Matt's account): ";
echo $mattsAccount->getBalance() . PHP_EOL;
echo "Final state (My account): ";
echo $myAccount->getBalance() . PHP_EOL;

//with one method

$accountA = new Account("Account A", 100.00);
$accountB = new Account("Account B", 0.00);
$accountC = new Account('Account C', 0.00);

Account::transfer($accountA, $accountB, 50);
Account::transfer($accountB, $accountC, 25);

echo PHP_EOL;

echo "Final state (account A): " . $accountA->getBalance() . PHP_EOL;
echo "Final state (account B): " . $accountB->getBalance() . PHP_EOL;
echo "Final state (account C): " . $accountC->getBalance() . PHP_EOL;
