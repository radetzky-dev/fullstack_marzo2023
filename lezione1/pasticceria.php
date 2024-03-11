<?php
$siteTitle = "Benvenuto nella mia pagina";
$name = "Paolo";
$myName = "Mario";
?>
<!DOCTYPE html>
<html lang="ita">

<head>
    <title>
        <?php echo $siteTitle . ' ' . $name; ?>
    </title>
</head>

<body>
    <h2>Pasticceria Musa</h2>
    <p>
        <?php echo date('H:i'); ?> <br>DAY
        <?php echo date('d/m/Y'); ?>
    <h3>I nostri dolci</h3>
    <table>
        <tr>
            <td>
                <h4>Meringata</h4>
                <img src="assets/torta.png" alt="image">
            </td>
            <td>
                <h4>Torta Margherita</h4>
                <img src="assets/torta.png" alt="image">
            </td>
        </tr>
        <tr>
            <td><img src="assets/torta.png" alt="image"></td>
            <td><img src="assets/torta.png" alt="image">
            </td>
        </tr>
    </table>
    </p>
    <script>
        my_name = "<?php echo $name; ?>";
        alert("Ciao " + my_name);
    </script>

</body>

</html>