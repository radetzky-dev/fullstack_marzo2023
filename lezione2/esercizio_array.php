<?php
$siteTitle = "General Store Musa";
//Assegna prodotti e prezzi all'array products
$products = array(
    "pc" => array(600.20, "torta.png"),
    "mouse" => array(8.50, "torta.png")
);
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>
        <?php echo $siteTitle; ?>
    </title>
</head>

<body>
    <h2><strong>
            <?php echo $siteTitle; ?>
        </strong></h2>

    <h3>I nostri prodotti</h3>

    <table border="1">
        <thead>
            <tr>
                <td>Oggetto</td>
                <td>Prezzo</td>
                <td>Immagine</td>
            </tr>
        </thead>
        <?php
        //Stampa prodotti e relativi prezzi in un ciclo foreach
        foreach ($products as $index => $value) {
            echo "<tr><td>" . $index . "</td><td>" . $value[0] . "</td><td><img src='assets/" . $value[1] . "'></td></tr>";

        }
        ?>
    </table>
</body>

</html>