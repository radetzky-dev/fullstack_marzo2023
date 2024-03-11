<?php

$num = 7.2;
$name = "6";
$nomeCognome = "Mario Rossi";

echo $name + $num;

echo "<hr>";

echo 'Questa ' . $num . ' valore<br>';
echo "Questa " . $num . " valore<br>";

echo "Number is $num<br>";

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