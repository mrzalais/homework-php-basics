<?php


class DataCompiler
{
    private int $surveyed;
    private float $energyDrinkersPercentage;
    private float $preferCitrusPercentage;

    public function __construct(int $surveyed, float $energyDrinkersPercentage, float $preferCitrusPercentage)
    {
        $this->surveyed = $surveyed;
        $this->energyDrinkersPercentage = $energyDrinkersPercentage;
        $this->preferCitrusPercentage = $preferCitrusPercentage;
    }

    public function surveyed(): int
    {
        return $this->surveyed;
    }

    public function calculateEnergyDrinkers(): int
    {
        return $this->surveyed * $this->energyDrinkersPercentage;
    }

    public function calculatePreferCitrus(): int
    {
        return $this->surveyed * $this->energyDrinkersPercentage * $this->preferCitrusPercentage;
    }
}
