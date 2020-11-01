<?php

declare(strict_types=1);

require_once 'Date.php';

$today = new Date(11, 2, 2020);

echo $today->DisplayDate() . PHP_EOL;
