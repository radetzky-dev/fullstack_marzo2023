<?php

$test = array('hi');
$test += array('test', 'oh');
var_dump($test);

echo "<hr>";
$array1 = array("colore" => "rosso", 2, 4);
$array2 = array("a", "b", "colore" => "verde", "forma" => "trapezio", 4);
$risultato = array_merge($array1, $array2);
print_r($risultato);