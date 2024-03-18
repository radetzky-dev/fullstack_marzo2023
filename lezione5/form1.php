<?php

//echo $_SERVER['REQUEST_METHOD'];

$name = "";
$age = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST["name"] || $_POST["age"]) {
        echo "metodo POST<br>";
        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
            die ("invalid name and name should be alpha");
        }
        echo "Welcome " . $_POST['name'] . "<br />";
        echo "You are " . $_POST['age'] . " years old.";

    }
} else {

    if (array_key_exists('name', $_GET)) {
        if ($_GET["name"] || $_GET["age"]) {
            echo "metodo GET<br>";
            echo "Ti chiami " . $_GET['name'] . "<br />";
            echo "Hai " . $_GET['age'] . " anni.";

            $name = $_GET['name'];
            $age = $_GET['age'];
            if (array_key_exists('hobbies', $_GET)) {
                $hobbies = join(' ', $_GET['hobbies']);
                echo "<br>I tuoi hobbies sono : " . $hobbies;
            }

        }
    }
}


?>
<html>

<body>
    <h3>POST</h3>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" required />
        Age: <input type="number" name="age" required />
        <input type="submit" />
    </form>

    <h3>GET</h3>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" required value="<?php echo $name; ?>" />
        Age: <input type="number" name="age" required value="<?php echo $age; ?>" />
        Hobby : <select name="hobbies[]" multiple>
            <option value="golf">golf</option>
            <option value="calcio">calcio</option>
            <option value="surf">surf</option>
            <option value="tennis">tennis</option>
        </select>
        <input type="submit" />
    </form>

</body>

</html>