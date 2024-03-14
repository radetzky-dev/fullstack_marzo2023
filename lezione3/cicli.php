<?php
$i = 9;
$sum = 0;
while ($i <= 10) {
    echo "$i e somma $sum <br>";
    $sum = $sum + $i;
    $i++;
    echo "DOPO $i e somma $sum <br>";
}
echo "Totale $sum";

echo "<hr>";

$i = 1;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
$i before the increment
(post-increment) */
    echo "<br>";
}
echo "finale $i<br>";

echo "<hr>";
/* example 2 */

$i = 11;
while ($i <= 10):
    echo $i;
    echo "<br>";
    $i++;
endwhile;

echo "finale $i<br>";

echo "<hr>";
$i = 11;
while ($i > 2):
    echo --$i;
    echo "<br>";

endwhile;

echo "finale $i<br>";

echo "<hr>";
$i = 15;
do {
    echo "sono dentro<br>";
    echo $i . '<br>';
    $i--;
} while ($i > 10);

echo "finale $i<br>";

echo "<hr>";
for ($i = 3; $i <= 11; $i++) {
    echo $i . "<br>";
}

echo "<hr>";
for ($x = 11; $x > 3; $x--) {
    echo $x . "<br>";
}

echo "<hr>";
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}
echo "<hr>";
$people = array(
    array('name' => 'Kalle', 'salt' => 856412),
    array('name' => 'Pierre', 'salt' => 215863),
    array('name' => 'Mario', 'salt' => 215434863)
);

for ($i = 0; $i < count($people); $i++) {
    echo "$i) " . $people[$i]['name'] . " sale: " . $people[$i]['salt'] . "<br>";
}

echo "<hr>";
for ($i = 1, $j = 20, $x = 4; $i <= 4 || $j <= 800; $i++, $j = $j + 200, $x = $x + 2) {
    echo "i=" . $i . ", j=" . $j . " x=$x <br>";
}
