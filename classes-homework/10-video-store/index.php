<?php

declare(strict_types=1);

require_once 'Application.php';
require_once 'Video.php';
require_once 'VideoStore.php';

$store = new VideoStore();

$store->addMovie($matrix = new Video('The Matrix', false));
$store->addMovie(new Video('Godfather II', false));
$store->addMovie(new Video('Star Wars Episode IV: A New Hope', false));

$store->rateMovie($matrix, 7);

$app = new Application($store);

$app->run();
