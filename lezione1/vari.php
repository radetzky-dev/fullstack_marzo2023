<?php

$num = 7.2;
$name = "6";
$nomeCognome = "Mario Rossi";

$mioIntero = -7;
var_dump($mioIntero);

$mioFloat = 5.673;
var_dump($mioFloat);
echo "<hr>";
echo $mioFloat;
echo "<hr>";

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
    var_dump($a);
    var_dump($b);
    return $a + $b;

}
echo somma(-2, "5");