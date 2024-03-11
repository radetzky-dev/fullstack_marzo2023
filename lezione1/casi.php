<?php

//Booleani
$vero = true;
$falso = false;
$vero = 1 && 1;
$falso = 1 && 0;
$vero = 1 || 0;
$falso = 0 || 0;

$intero = 1;
$intero = 1231231;
$intero = -234224;
$intero = 1 + 1;
$intero = 1 - 1;
$intero = 3 * 4;

$float = 10.3;
$float = -33.45;
$float = 6.1e6; // 6,1 * 10^6 => 6.100.000
$float = 3E-7;  // 3 * 10^-7  => 3/10.000.000 = 0,0000003

$stringa = "ciao come stai?";
$stringa = 'ciao come stai?';
$stringa = "lei mi ha chiesto 'come stai?'";
$stringa = 'lei mi ha chiesto "come stai?"';

//stringhe non valide perché contengono lo stesso carattere di apertura
//all'interno della stringa
//$stringa_non_valida = "lei mi ha chiesto "come stai?"";
//$stringa_non_valida = 'lei mi ha chiesto 'come stai?'';

//utilizzare il backslash, \, per impiegare il carattere di apertura all'interno della stringa
//tale operazione viene definita escaping delle stringhe
$stringa_valida = "lei mi ha chiesto \"come stai?\"";
$stringa_valida = 'lei mi ha chiesto \'come stai?\'';