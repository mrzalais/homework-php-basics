<?php


class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(string $name, float $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function printProduct(): string
    {
        return $this->name . ', ' . $this->price . ', ' . $this->amount;
    }

    public function increasePrice(float $amount): void
    {
        $this->price += $amount;
    }

    public function increaseAmount(int $amount): void
    {
        $this->amount += $amount;
    }
}
