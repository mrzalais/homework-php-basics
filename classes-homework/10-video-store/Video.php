<?php


class Video
{
    private string $title;
    private bool $checked;
    private float $rating;

    public function __construct(string $title, bool $checked = NULL, float $rating = NULL)
    {
        $this->title = $title;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function checkOut(): void
    {
        $this->checked = 1;
    }

    public function returnMovie(): void
    {
        $this->checked = 0;
    }

    public function rateMovie(int $rating): void
    {
        $this->rating = $rating;
    }
}
