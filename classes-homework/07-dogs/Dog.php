<?php


class Dog
{
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;

    public function __construct(string $name, string $sex, string $mother = NULL, string $father = NULL)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if ($this->father !== NULL) {
            return $this->father;
        }
        return 'Unknown';
    }

    public function mothersName(): string
    {
        if ($this->father !== NULL) {
            return $this->father;
        }
        return 'Unknown';
    }

    public function HasSameMotherAs(Dog $dogB): string
    {
        if ($this->mother === $dogB->mother) {
            return $this->name . ' has the same mother as ' . $dogB->name;
        }
        return $this->name . ' does not have the same mother as ' . $dogB->name;
    }
}
