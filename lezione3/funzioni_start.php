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

function add(int $xxxdsdsaffs): int
{
    return ++$xxxdsdsaffs;
}

function addRef(&$number)
{
    return ++$number;
}


$name = "paolo";
$surname = "rossi";

echo "Hey, " . writeName($name, $surname);

echo "<hr>";
scriviNome($name);

echo "<hr>";
$myNumber = 5;
echo add($myNumber) . '<br>';
echo "MyNum $myNumber<br>";

echo addRef($myNumber) . '<br>';
echo addRef($myNumber) . '<br>';
echo add($myNumber) . '<br>';
echo "MyNum $myNumber<br>";
