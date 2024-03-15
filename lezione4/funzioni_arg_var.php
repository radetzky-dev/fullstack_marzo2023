<?php

function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs <br>";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br>";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br>";
    }
}

function sommaTutto()
{
    $numargs = func_num_args();
    $arg_list = func_get_args();
    $total = 0;
    for ($i = 0; $i < $numargs; $i++) {
        if (is_numeric($arg_list[$i])) {
            $total = $total + $arg_list[$i];
        }
    }
    return $total;
}


foo("nome", 5, "prova");
echo "<hr>";
foo("due", 51, "alfa", 33.4, "pippo", 3, "ciao");

echo "<hr>";
echo sommaTutto(5, 7, "aaa", 11);
echo "<hr>";
echo sommaTutto(2, 17, 321, 89.0, 212, 33.56, "gg");


