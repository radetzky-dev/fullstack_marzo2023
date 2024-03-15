<?php
/*
1- 100
Write a function to check whether a number is prime or not.

Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.
funzione isPrime(): true | false
TIP : $a % $b Modulo

for 1-100 
    {
        Il numero x è idPrime
    }
*/

function IsPrime($n)
{
    for ($x = 2; $x < $n; $x++) {
        //  echo $x . " vs " . $n . "<br>";
        if ($n % $x == 0) {
            //  echo "$n / $x resto = 0 <br>    ";
            return 0;
        }
    }
    return 1;
}

for ($i = 1; $i <= 10; $i++) {
    $a = IsPrime($i);
    if ($a == 0)
        echo "$i is NOT a Prime Number...<br>";
    else
        echo "$i is a Prime Number...<br>";
}

