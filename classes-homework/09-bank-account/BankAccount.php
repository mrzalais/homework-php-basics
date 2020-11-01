<?php


class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUsernameAndBalance()
    {
        if ($this->balance < 0) {
            $value = '-$' . number_format(abs($this->balance), 2, '.', ' ');
        } else {
            $value = '$' . number_format($this->balance, 2, '.', ' ');
        }
        return "$this->name, $value";
    }
}