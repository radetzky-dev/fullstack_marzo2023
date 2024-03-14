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

$i = 4;
while ($i <= 10) {
    echo $i++;  /* the printed value would be
$i before the increment
(post-increment) */
    echo "<br>";
}
echo "finale $i<br>";

echo "<hr>";
/* example 2 */

$i = 1;
while ($i < 10):
    echo $i;
    echo "<br>";
    $i++;
endwhile;

echo "finale $i<br>";
