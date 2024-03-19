<?php

session_start();
if (!isset ($_SESSION['count'])) {
    $_SESSION['count'] = 0;
    $_SESSION['array'] = ['start'];
} else {
    $_SESSION['count']++;
    $_SESSION['array'][] = random_int(1, 100);
}

$_SESSION['carrello'] = ["t-shirt", 30, "XL"];
$_SESSION['nome'] = "Mario";


echo $_SESSION['nome'] . " hai visitato questa pagina " . $_SESSION['count'] . " volte";
echo "<br>Cosa c'è nel carrello?  ";
var_dump($_SESSION['carrello']);
echo "<pre>";
print_r($_SESSION['array']);
echo "</pre>";

if ($_SESSION['count'] > 3) {
    session_destroy();
}



//unset($_SESSION['count']);