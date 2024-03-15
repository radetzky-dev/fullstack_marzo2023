<?php


if (function_exists('json_validate')) {
    echo "funzione  are available.<br />\n";
    var_dump(json_validate('{ "test": { "foo": "bar" } }'));
} else {
    echo "funzione are NOT available.<br />\n";
    echo "uso un'altra funzione...";
}

echo "<hr>";
$var = '';


// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "This var is set so I will print<br>";
}

$var = null;

if (is_null($var)) {
    echo "è nulla<br>";
}

unset($var);

if (isset($var)) {
    echo "non è settata<br>";
}

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE