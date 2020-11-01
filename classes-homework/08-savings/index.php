<?php

declare(strict_types=1);

require_once 'SavingsAccount.php';

$balance = readline("How much money is in the account: ");
$balance = (float)$balance;

$account = new SavingsAccount($balance);

$interest = readline("Enter the annual interest rate: ");
$interest = (float)$interest;

$months = readline("How long (months) has the account been opened: ");
$months = (float)$months;

$deposit = 0;
$withdrawn = 0;
$interestEarned = 0;

for ($i = 1; $i <= $months; $i++) {
    $deposit += readline('Enter the amount deposited for month ' . $i . ': ');
    $withdrawn += readline('Enter the amount withdrawn during month ' . $i . ': ');
    $interestEarned += $account->monthlyInterest($interest);
}

$account->deposit($deposit);
$account->withdraw($withdrawn);
$account->addInterest($interestEarned);

echo 'Total deposited: $' . number_format($deposit, 2, '.', ',') . PHP_EOL;
echo 'Total withdrawn: $' . number_format($withdrawn, 2, '.', ',') . PHP_EOL;
echo 'Interest earned: $' . number_format($interestEarned, 2, '.', ',') . PHP_EOL;
echo 'Ending balance: $' . number_format($account->getBalance(), 2, '.', ',') . PHP_EOL;

