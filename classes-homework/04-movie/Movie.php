<?php


class Movie
{
    public string $rating;
    private string $title;
    private string $studio;

    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function studio(): string
    {
        return $this->studio;
    }

    public function rating(): string
    {
        return $this->rating;
    }

    public function getPG(array $names): array
    {
        $moviesPG13 = [];

        foreach ($names as $movie) {
            if ($movie->rating === 'PG13') {
                $moviesPG13 [] = $movie;
            }
        }

        return $moviesPG13;
    }
}
