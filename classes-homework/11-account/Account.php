<?php


class Account
{
    private int $balance;
    private string $name;

    public function __construct(string $name, float $balance)
    {
        $this->balance = $balance;
        $this->name = $name;
    }

    public static function transfer(Account $from, Account $to, int $howMuch)
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }

    public function withdraw(int $amount): void
    {
        $this->balance -= $amount;
    }

    public function deposit(int $amount): void
    {
        $this->balance += $amount;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}
