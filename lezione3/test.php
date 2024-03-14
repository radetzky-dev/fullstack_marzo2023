<?php
$name = "Paolo";
echo "Prova<br>";
print "print does not require parentheses.";

$foo = "example";
print "foo is $foo<br>";
echo "questo è un $foo<br>";

$myNum = 29;

echo ($myNum <= 30) ? "Si" : "No";

$myName = "Paolo";

echo ($myName == "Paolo") ? "Ciao" : "Non ti conosco";

echo "<hr>";

if ($myNum <= 50) {
    echo "$myNum è minore o uguale di 50<br>";
}

$secondNum = 11;

if ($myNum < $secondNum) {
    echo "$myNum è minore di $secondNum<br>";
} else {
    echo "$secondNum è minore di $myNum<br>";
    echo "$myNum è maggiore di $secondNum<br>";
}

$t = date("H");
echo "<p>Solo le $t</p>";

if ($t <= 11) {
    echo "Buongiorno<br>";
} elseif ($t > 11 && $t <= 20) {
    echo "Buon pomeriggio<br>";
} else {
    echo "Buona notte<br>";
}

echo "<hr>";
$i = 2;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i is less than 3 but not negative";
        break;
    case 3:
        echo "i is 3";
        break;
    default:
        echo "i non è compreso fra 0 e 3";
}

echo "<hr>";
$beer = "stella";
switch ($beer) {
    case 'tuborg';
    case 'carlsberg';
    case 'stella';
    case 'heineken';
        echo 'Good choice';
        break;
    default;
        echo 'Please make a new selection...';
        break;
}

?>
<p>QUi</p>

<p>Ciao,
    <b>
        <?= $name; ?>
    </b> stai bene?
</p>