<?php

//una persona che ha un età e voi dovete mostrare un messaggio se può bere alcolici o meno in Italia 18
//e in USA 21

//Secondo dato un numero dire se è positivo, negativo o se è zero


$age = 17;

if ($age < 18) {
    echo "Non puoi bere in Italia e negli USA.";
} else if ($age >= 18 && $age < 21) {
    echo "Puoi bere in Italia, negli USA no.";
} else {
    echo "Puoi bere sia in Italia sia negli USA.";
}

echo "<hr>";

//dato un numero dire se è positivo, negativo o zero

$myNum = 0;

if ($myNum == 0) {
    echo "Il numero è zero.";
} else if ($myNum < 0) {
    echo "Il numero è negativo";
} else {
    echo "Il numero è positivo.";
}

