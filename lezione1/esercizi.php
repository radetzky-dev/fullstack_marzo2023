<?php

$myVar = "musa formazione";

/*
https://www.php.net/manual/it/language.types.string.php
https://www.php.net/manual/it/ref.strings.php


a) transform a string all uppercase letters.
b) transform a string all lowercase letters.
c) make a string's first character uppercase.
d) make a string's first character of all the words uppercase.
*/
$myVarUppercase = strtoupper($myVar);
echo $myVarUppercase; // Output: MUSA FORMAZIONE
echo "<br>";
$myVarLowercase = strtolower($myVar);
echo $myVarLowercase; // Output: musa formazione
echo "<br>";
$myVarFirstUppercase = ucfirst($myVar);
echo $myVarFirstUppercase; // Output: Musa formazione
echo "<br>";
$myVarWordsUppercase = ucwords($myVar);
echo $myVarWordsUppercase; // Output: Musa Formazione
echo "<hr>";

$myString = "Il cielo oggi è azzurro";
/*
Se $myvar contine la parola "oggi"
*/
$search = "oGgI";

$search = strtolower($search); //normalization

echo "<h3>$myString</h3>";
echo "<em>controllo con la funzione str_contains()</em> <br>";
// using the function str_contains(). case-sensitive!
if (str_contains($myString, $search)) {
    echo "La stringa CONTIENE la parola <strong>'$search'</strong>.<br><hr>";
} else {
    echo "La stringa NON contiene la parola <strong>'$search'</strong>.<br><hr>";
}

// using strripos(). Case unsensitive function
$contains;
echo "<em>controllo con la funzione strripos()</em><br>";
if (strripos($myString, $search[0]) !== false) {
    $contains = "";
} else {
    $contains = "non";
}
echo "La stringa $contains contiene la parola <strong>'$search'</strong>";


e