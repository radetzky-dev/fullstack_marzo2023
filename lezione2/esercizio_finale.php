<?php

$string = 'gianni.rovessssri@example.com';

//Expected Output : 'paolo'
//echo substr($string, 0, 5);

$key = '@';
$position = stripos($string, $key, 0);
echo substr($string, 0, $position);
