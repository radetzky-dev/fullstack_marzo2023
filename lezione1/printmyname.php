<?php

/**
 * printMyName
 * chrtl +shift + i
 * @param  mixed $name
 * @return void
 */
function printMyName($name)
{
    echo "Stampo da funzione: <strong>Hello " . $name . "!</strong><br>";
}
$name = "Paolo";
?>
<html>

<head>
    <title>
        <?php echo 'Questa pagina è di ' . $name; ?>
    </title>
    <script>
        //   alert("Ciao");
        document.write("testo");
        console.log("Scrive sotto");
    </script>
</head>

<body>

    <?php
    echo "Il <b>mio</b> nome è Paolo<br>";

    # assegno una variabile
    echo "Il mio nome è " . $name . "<br>";

    echo "questo " . " è " . " una concatenazione<br>";

    /*
    Funzione che stampa il nome
    Multiriga
    */
    printMyName("Mario " . $name); // chiama la funzione
    
    ?>
    <h3>SOLO HTML</h3>
    <?php
    printMyName($name); // chiama la funzione
    ?>

</body>

</html>