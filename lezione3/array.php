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

unset($frutti['fruttoX']);
unset($frutti[0]);
echo "<hr>";
echo "<pre>";
print_r($frutti);
echo "</pre>";

echo "<hr>";
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

echo "<hr>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix<br>";
}
if (in_array("mac", $os)) {
    echo "Got mac<br>";
}

$key = array_search('Mac', $os, false);
echo "k " . $key;

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;

echo "<br>k " . $key;

echo "<hr>";
$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number <br>";
}

echo "<hr>";
$input = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

echo "<hr>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


