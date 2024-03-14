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
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}

echo "<hr>";

ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}

echo "<hr>";

krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>   ";
}

echo "<hr>";

$array1 = $array2 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');

sort($array1);
echo "Standard sorting\n";
print_r($array1);

natcasesort($array2);
echo "\nNatural order sorting (case-insensitive)\n";
print_r($array2);