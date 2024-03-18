<?php

//es1
//Dati 3 numeri (45,2,81) scrivere una funzione che determini qual è il maggiore

$numbers = array(45, 122, 810);
echo "L'elemento più grande è: " . max($numbers);
echo "<hr>";

//es2
/*
Creare una funzione che controlla se la stringa che gli passa è palindroma

panico
alveare
rumore
madam
osso
ossesso
esose

*/

$words = ["Alecsandra", "Osso", "Esose", "Albero", "Oro"];

echo "<br>";

foreach ($words as $word) {
    $word = strtolower($word);
    echo $word;
    if (strrev($word) === $word) {
        echo " parola palindroma";
    } else {
        echo " parola NON palindroma";
    }
    echo "<br>";
}

echo "<hr>";


$myString = "Ai lati d'italia";
// tutte le funzioni utilizzate sono eseguibili dalla versione 4 di php
function checkPalindrome(string $string): void
{  //ritorna void perche' stampa il risultato e basta
    $newString = preg_replace("/[^a-zA-Z0-9]/", "", $string); //elimina spazi e altri caratteri con una regular expression
    $newString = strtolower($newString);//trasforma tutti i caratteri in minuscolo
    if ($newString === strrev($newString)) {//confronta la stringa con la stringa invertita
        echo "La stringa <strong>$string</strong> è palindroma <br>";
    } else {
        echo "La stringa <strong>$string</strong> NON è palindroma <br>";
    }
}


function checkPalindromeInArray(array $array): void
{
    foreach ($array as $element) {
        checkPalindrome($element);
    }
}


$wordsArray = array(
    "panico",
    "alveare",
    "ruMore",
    "madam",
    "osso",
    "ossessO",
    "eSose",
    "I topi non avevano nipoti",
    "Ai lati d'Italia"
);
$stringOfArray = implode(",&nbsp; ", $wordsArray);
echo "Questa è la lista di stringhe da controllare: <br><strong>$stringOfArray</strong><br>";
echo "<br>";
checkPalindromeInArray($wordsArray);