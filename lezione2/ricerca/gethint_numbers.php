<?php
// Array with numbers
$numbers[] = "3396505982";
$numbers[] = "3934269897";
$numbers[] = "3289464545";
$numbers[] = "3356456406";
$numbers[] = "3804787445";
$numbers[] = "3393684646";
$numbers[] = "3924654984";
$numbers[] = "3489878456";
$numbers[] = "3476979878";
$numbers[] = "3476456445";
$numbers[] = "3939845644";
$numbers[] = "3398978946";
$numbers[] = "3326498466";
$numbers[] = "3402654648";
$numbers[] = "3382598546";
$numbers[] = "3727272727";
$numbers[] = "3282465465";
$numbers[] = "3358564654";
$numbers[] = "3293125844";
$numbers[] = "3408974654";
$numbers[] = "3337984654";
$numbers[] = "3201212122";
$numbers[] = "3936464846";
$numbers[] = "3477464646";
$numbers[] = "3532312312";
$numbers[] = "3698565646";
$numbers[] = "3699875644";
$numbers[] = "3805646554";
$numbers[] = "3336456456";
$numbers[] = "3629564455";
$numbers[] = "3576798765";



// ottiene il parametro searchTerm   e lo assegna alla variabile $input
$input = $_REQUEST["searchTerm"];
$hint = "";

// controlla che lùinput non sia una stringa vuota
if ($input !== "") {

    $len = strlen($input);
    foreach ($numbers as $number) {
        // Verifica se la stringa di input è trovata come sottostringa all'inizio del numero corrente
        if (stristr($input, substr($number, 0, $len))) {
            if ($hint === "") {
                $hint = $number;
            } else {
                // Se l'indizio non è vuoto, aggiungi il numero corrente ad esso
                $hint .= ", $number";
            }
        }
    }
}

// Output del suggerimento se non è vuoto
echo $hint === "" ? "nessun suggerimento" : $hint;