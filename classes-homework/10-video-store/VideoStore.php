<?php


class VideoStore
{
    private array $movies = [];

    public function addMovie(Video $movie): void
    {
        $this->movies[] = $movie;
    }

    public function checkOutMovie(string $movie): ?string
    {
        $findMovie = $this->findMovie($movie);
        if ($findMovie !== NULL) {
            $findMovie->checkOut();
        } else {
            return 'No such movie found in store';
        }
    }

    public function findMovie($title): ?Video
    {
        foreach ($this->allMovies() as $movie) {
            if ($movie->title() === $title) {
                return $movie;
            }
        }
        return NULL;
    }

    public function allMovies(): array
    {
        return $this->movies;
    }

    public function returnMovie(string $movie): void
    {
        $findMovie = $this->findMovie($movie);

        if ($findMovie !== NULL) {
            $findMovie->returnMovie();
        }
    }

    public function rateMovie(Video $movie, int $rating): void
    {
        $movie->rateMovie($rating);
    }
}
