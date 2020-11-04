<?php


class FuelGauge
{
    private int $fuelAmount;

    public function __construct(int $fuelAmount)
    {
        $this->fuelAmount = $fuelAmount;
    }

    public function getFuel(): int
    {
        return $this->fuelAmount;
    }

    public function increaseFuel(): int
    {
        return $this->fuelAmount++;
    }

    public function consumeFuel(): int
    {
        return $this->fuelAmount--;
    }
}
