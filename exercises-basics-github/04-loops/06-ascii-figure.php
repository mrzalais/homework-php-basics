<?php

declare(strict_types=1);

class AsciiFigure
{
    function buildPyramid()
    {
        define ("CONSTANT", 5);
        for ($i = 1; $i < CONSTANT + 1; $i++)
        {
            $line = '';
            for ($j = 1; $j <= CONSTANT - $i; $j++)
            {
                $line = $line . '////';
            }
            for ($m = 1; $m != (2 * $i - 1); $m++)
            {
                $line = $line . '****';
            }
            for ($p = 1; $p <= CONSTANT - $i; $p++)
            {
                $line = $line . '\\\\\\\\';
            }
            echo $line . PHP_EOL;
        }
    }
}

$test = new AsciiFigure();
$test->buildPyramid();