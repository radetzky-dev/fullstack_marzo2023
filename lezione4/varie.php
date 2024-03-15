<?php


if (function_exists('json_validate')) {
    echo "funzione  are available.<br />\n";
    var_dump(json_validate('{ "test": { "foo": "bar" } }'));
} else {
    echo "funzione are NOT available.<br />\n";
    echo "uso un'altra funzione...";
}

phpinfo();