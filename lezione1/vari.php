<?php

$num = 7.2;
$name = "6";

echo $name + $num;

echo "<hr>";

/**
 * somma
 *
 * @param  int $a
 * @param  int $b
 * @return int
 */
function somma(int $a, float $b)
{
    return $a + $b;
}
echo somma(7, "5");