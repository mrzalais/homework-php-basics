<?php


class DogTest
{
    private array $dogs;

    public function addDog(Dog $dog): void
    {
        $this->dogs[] = $dog;
    }

    public function allDogs(): array
    {
        return $this->dogs;
    }
}
