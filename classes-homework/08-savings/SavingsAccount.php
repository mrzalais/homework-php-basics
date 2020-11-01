<?php


class SavingsAccount
{
    private int $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function withdraw(int $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function monthlyInterest(float $rate): float
    {
        return $this->balance = $this->balance * $rate / 12;
    }

    public function addInterest(float $amount): void
    {
        $this->balance += $amount;
    }
}
