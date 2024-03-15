<?php

/**
 * reverseString
 *
 * @param  mixed $str1
 * @return string
 */
function reverseString(string $str1): string|null
{
    $n = strlen($str1);
    // echo "$n $str1<br>";
    if ($n == 1) {
        return $str1;
    } else {
        $n--;
        return reverseString(substr($str1, 1, $n)) . substr($str1, 0, 1);
    }
}
echo '<br>';
echo reverseString('paolo rossi verdi') . "<br>";

echo strrev("paolo rossi");

//creapdf
//invaiMail