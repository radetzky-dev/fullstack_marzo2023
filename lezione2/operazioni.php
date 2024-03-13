<?php

$x = 6;

echo $x + 5;
echo "<hr>";

echo $x - 2;

echo "<hr>";
echo $x % 2;

echo "<hr>";
echo "<br>divisione ";
echo $x / 3;
echo "<br>resto ";
echo $x % 3;

echo "<hr>";
echo "<br>divisione ";
echo $x / 5;
echo "<br>resto ";
echo $x % 5;

//ASSEGNAZIONE

$a = ($b = 4) + 5; // $a is equal to 9 now, and $b has been set to 4.

echo "<hr>";
$a = 3;
$a += 5;
echo $a;


echo "<hr>";
$a = 3;
$a = $a + 5;
echo $a;

echo "<hr>";
$b = "Hello ";
$b .= "There!";

//$b = $b . "There!";
echo $b;


//COMPARAZIONE
echo "<hr>";
var_dump("1" == "01");

var_dump("1" !== "01");

var_dump(1 == "1");

var_dump(1 === "1");

//Incrementali
echo "<hr>";
$x = 11;

echo $x;
echo "<br>";
echo ++$x;
echo "<br>";
echo $x++;
echo "<br>";
echo $x;

echo "<hr>";

$a = "Hello ";
$b = $a . "<b>World!</b>"; // now $b contains "Hello World!"


?>
<hr>
<?php
$a = "Hello ";
$a .= "<b>World!</b><br>";     // now $a contains "Hello World!"
echo $a;
