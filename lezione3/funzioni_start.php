<?php


/**
 * writeName
 *
 * @param  string $name
 * @param  string $surname
 * @return string
 */
function writeName(string $name, string $surname): string
{
    return "ciao $name";
}

function scriviNome($nome)
{
    echo "ciao $nome";

}


$name = "paolo";
$surname = "rossi";

echo "Hey, " . writeName($name, $surname);

echo "<hr>";
scriviNome($name);
