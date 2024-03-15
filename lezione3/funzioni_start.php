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


/**
 * scrivEta
 *
 * @param  mixed $name
 * @param  mixed $age
 * @return void
 */
function scrivEta(string $name, int $age = 0): void
{
    if ($age > 0) {
        echo "$name ha $age anni<br>";
    } else {
        echo "Ciao $name<br>";
    }

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

echo "<hr>";
scrivEta("mario");
scrivEta("piero", 32);
scrivEta("silvia", 8);

