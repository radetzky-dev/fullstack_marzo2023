<?php

$a = array("a", "b");

$b = ["a", "b"];

$b[] = "c";

var_dump($a);
echo "<hr>";
var_dump($b);

$frutti = ["frutto0" => "banana", "frutto1" => "mela"];

echo "Mi mangio una " . $frutti["frutto1"];
echo "<hr>";
$frutti["frutto1"] = "lampone";
$frutti["fruttoX"] = "pera";
$frutti[] = "anguria";
$frutti["fruttoY"] = "kiwi";
$frutti[] = "melone";
echo "Mi mangio una " . $frutti["frutto1"];
echo "<hr>";
echo "<pre>";
print_r($frutti);
echo "</pre>";

$frutti[1] = "arancia";
echo "<hr>";
echo "<pre>";
print_r($frutti);
echo "</pre>";

