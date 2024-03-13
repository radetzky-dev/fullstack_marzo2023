<?php

//ARRAY NUMERICI
$vari = array('fiat', 'volvo', 'ferrari', 7, 7.56);
var_dump($vari);
echo '<hr>';

$cars = array('fiat', 'volvo', 'ferrari');
var_dump($cars);

echo '<hr>';

print_r($cars);

echo '<hr>';

echo $cars[1];

echo '<hr>';

echo $cars[2];
echo '<hr>';
$cars[3] = "renault";
var_dump($cars);

echo '<hr>';

echo $cars[3];

echo '<hr>';
//ARRAY ASSOCIATIVI

$ages = array("Mario" => 11, "Maria" => 31, "Silvia" => 18);
var_dump($ages);

echo '<hr>';
echo "Mario ha " . $ages['Mario'] . " anni<br>";
echo "Silvia ha " . $ages['Silvia'] . " anni<br>";

//ARRAY Multidimensionali

$families = array(
    "Griffin" => array('Peter', 'Lois', 'Megan'),
    "Quagmaire" => array('Glenn', 'Maria'),
    "Rossi" => array('Piero', 'Silvia', 'Antonio'),
    "Verdi" => array("Mario" => 11, "Maria" => 'trenta'),
    "gialli" => array(81 => 11, 3 => 'trenta'),
);

var_dump($families['Rossi'][2]);
echo '<hr>';
echo "Mario dei Verdi ha " . $families['Verdi']['Maria'] . " anni";
echo "<hr>";
var_dump($families['gialli'][81]);
var_dump($families['gialli'][3]);