<?php


class Odometer
{
    private int $distance;

    public function __construct(int $distance)
    {
        $this->distance = $distance;
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function increaseOdometer(): string
    {
        if ($this->distance <= 999999) {
            return $this->distance++;
        }
        return $this->distance = 0;
    }
}
