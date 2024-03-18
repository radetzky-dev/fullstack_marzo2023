<?php

//echo $_SERVER['REQUEST_METHOD'];

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

    if (isset ($_GET["name"])) {
        if ($_GET["name"] || $_GET["age"]) {
            echo "metodo GET<br>";
            echo "Welcome " . $_GET['name'] . "<br />";
            echo "You are " . $_GET['age'] . " years old.";

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
        Name: <input type="text" name="name" required />
        Age: <input type="number" name="age" required />
        <input type="submit" />
    </form>

</body>

</html>