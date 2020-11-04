<?php


class Application
{
    private VideoStore $store;

    public function __construct(VideoStore $store)
    {
        $this->store = $store;
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to rate movie\n";
            echo "Choose 5 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovie();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->rateMovie();
                    break;
                case 5:
                    echo $this->listMovies() . PHP_EOL;
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovie(): void
    {
        $title = $this->enterMovie();
        $movie = new Video($title);
        $this->store->addMovie($movie);
    }

    private function enterMovie()
    {
        return readline('Enter title of the movie: ');
    }

    private function rentVideo(): void
    {
        $movie = $this->enterMovie();
        $this->store->checkOutMovie($movie);
    }

    private function returnVideo(): void
    {
        $movie = $this->enterMovie();
        $this->store->returnMovie($movie);
    }

    private function rateMovie(): void
    {
        $movie = $this->enterMovie();
        $rating = readline('Enter rating for this movie: ');
        $this->store->rateMovie($movie, $rating);
    }

    private function listMovies(): string
    {
        $movies = [];

        foreach ($this->store->allMovies() as $movie) {
            $movies [] = $movie->title();
        }
        return 'Available movies: ' . implode("\n", $movies);
    }
}
