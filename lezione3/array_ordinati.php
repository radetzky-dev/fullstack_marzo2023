<?php
//ordina tutti come il primo
$ar1 = array("mario", "silvia", "gianni");
$ar2 = array("rossi", "verdi", "bianchi");
$ar3 = array(30, 50, 22);
array_multisort($ar1, $ar2, $ar3);

echo "<pre>";
print_r($ar1);
echo "</pre>";
echo "<pre>";
print_r($ar2);
echo "</pre>";

echo "<pre>";
print_r($ar3);
echo "</pre>";

echo "<hr>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
echo "<pre>";
print_r($fruits);
echo "</pre>";

asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}

echo "<hr>";

ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}