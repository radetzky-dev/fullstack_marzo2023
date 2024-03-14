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


echo "<hr>";

$a = array(1, 32, 310, 17);

foreach ($a as $valore) {
    echo "Current value of \$a: $valore <br>";
}

echo "<hr>";
$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

echo $a['one'] . '<br>';

foreach ($a as $chiave => $valore) {
    echo "\$a[$chiave] => $valore <br>";
    echo $valore . "<br>";
    echo $chiave . "<br>";
    if ($chiave == 'one') {
        echo "Ho trovato la mia chiave!<br>";
        //funzione
    }

    if ($valore == 3) {
        echo "Ho trovato il mio valore!<br>";
        //funzione
    }
}

echo "<hr>";
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1]["primo"] = "y";
$a[1]["secondo"] = "z";

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<br>";


foreach ($a as $v1) {
    foreach ($v1 as $c => $v2) {
        echo "chiave $c e valore : $v2<br>";
    }
}

echo "<hr>";
$anagrafica = array();
$anagrafica[0]["nome"] = "mario";
$anagrafica[0]["cognome"] = "rossi";
$anagrafica[1]["nome"] = "silvia";
$anagrafica[1]["cognome"] = "bianchi";
$anagrafica[2]["nome"] = "gino";
$anagrafica[2]["cognome"] = "verdi";

echo "<pre>";
print_r($anagrafica);
echo "</pre>";
echo "<br>";

foreach ($anagrafica as $v1) {
    foreach ($v1 as $c => $v2) {
        echo "chiave $c e valore : $v2<br>";
    }
}


echo "<hr>";

$arr = array(1, 2, 4, 5, 6, 7, 9);

foreach ($arr as $key => $value) {
    if (!($value % 2)) { // salta i numeri pari
        continue;
    }

    if ($value == 5) {
        continue;
    }

    echo "numero dispari $value <br>";
}