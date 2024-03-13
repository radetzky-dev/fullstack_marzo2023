<?php

$arr = array("uno", "martello", "trave di legno");
foreach ($arr as $indice => $valore) {
    echo "{$indice} => {$valore} <br>";
}
echo "<br>";

$arr = array("uno" => "ciao", "martello" => "3kg", "trave di legno" => "abete");
foreach ($arr as $indice => $valore) {
    echo "{$indice} => {$valore} <br>";
}
echo "<br>";