<?php
//Tutte le funzioni
//VARS
$pathData = "data/prodotti.json";
$myStoreName = "Musa shop";


//ICONE
$logo = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
<path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
</svg>';

$shopIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
<path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
</svg>';

$deleteIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg>';
$addIcon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg>';


//Colori

//Prodotti
$catalogo = array(
    "casalinghi" => array(
        array(
            "nome" => "scolapasta",
            "prezzo" => 1.99,
            "qta" => 1,
            "img" => "bullone.png",
        ),
    ),
    "utensili" => array(
        array(
            "nome" => "martello",
            "prezzo" => 7.99,
            "qta" => 5,
            "img" => "martello.png",
        ),
        array(
            "nome" => "pinza",
            "prezzo" => 5.99,
            "qta" => 0,
            "img" => "rastrello.png",
        ),
    ),

    "giardinaggio" => array(
        array(
            "nome" => "rastrello",
            "prezzo" => 22.75,
            "qta" => 0,
        ),
    ),
);

//Inserisce dei nuovi prodotti nelle varie categorie
$catalogo["utensili"][] = array("nome" => "pala", "prezzo" => 14.99, "qta" => 5);
$catalogo["casalinghi"][] = array("nome" => "tegame", "prezzo" => 35.99, "qta" => 2);
$catalogo["cucina"][] = array("nome" => "pentola", "prezzo" => 45.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "vaso", "prezzo" => 9.99, "qta" => 0);
$catalogo["giardinaggio"][] = array("nome" => "zappa", "prezzo" => 12.99, "qta" => 1);
$catalogo["ferramenta"][] = array("nome" => "cacciavite", "prezzo" => 6.99, "qta" => -7);
$catalogo["ferramenta"][] = array("nome" => "bullone", "prezzo" => 1.99, "qta" => 1);
$catalogo["giardinaggio"][] = array("nome" => "rastrello", "prezzo" => 29.99, "qta" => 2);

/**
 * showCategory
 *
 * @param  mixed $catalogo
 * @param  mixed $catName
 * @return void
 */
function showCategory(array $catalogo, string $catName): void
{
    foreach ($catalogo[$catName] as $key => $prodotti) {
        if (is_array($prodotti)) {

            $qta = checkIfLast($prodotti['qta']);
            $price = $prodotti['prezzo'];

            if ($qta == "ULTIMO") {
                $oldPrice = "<del>" . $price . " €</del>";
                $price = calculateDiscount($price, 12.5);
                $price = $oldPrice . '<br><b>' . $price . '</b>';
                $qta = "<b>ULTIMO</b>";
            }

            $buttonStatus = "";
            if ($qta == "ESAURITO") {
                $qta = "<span class='text-danger'>ESAURITO</span>";
                $buttonStatus = "disabled";
            }

            //    $image = "<img src='assets/" . $prodotti['img'] . "' class='img-thumbnail'>";

            $admin = "";
            if (isset ($_SESSION["role"]) && $_SESSION["role"] == "admin") {
                $admin = "<a href='add_product.php' class='btn btn-primary'>Modifica prodotto</a>";
            }

            $image = "<img src='prodotti/" . (isset ($prodotti['img']) ? $prodotti['img'] : 'dummy.png') . "' class='img-thumbnail'>";

            echo "<tr><td>" . $image . "</td><td>" . $qta . "</td><td>" . $prodotti['nome'] . "</td><td>" . $price . " €" . "</td><td class='table-primary'>" . strtoupper($catName) . "</td>
            <td><a href='#' class='btn btn-primary' " . $buttonStatus . " >Compra</a>$admin</td>
            </tr>";
        }
    }
}


/**
 * calculateDiscount
 *
 * @param  mixed $price
 * @param  mixed $percentDiscount
 * @return float
 */
function calculateDiscount(float $price, float $percentDiscount): float
{
    $sconto = ($price * $percentDiscount) / 100;
    return round($price - $sconto, 2);
}


/**
 * checkIfLast
 *
 * @param  int $qta
 * @return int
 */
function checkIfLast(int $qta): int|string
{
    if ($qta <= 0) {
        return "ESAURITO";
    } elseif ($qta == 1) {
        return "ULTIMO";
    }
    return $qta;
}

/**
 * getMyUrl
 *
 * @return string
 */
function getMyUrl(): string
{
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $uri = str_replace("/admin", "", $uri);
    return "http://$host$uri/";
}

//Json
/**
 * readContentFile
 *
 * @param  mixed $fileNameWithPath
 * @return string
 */
function readContentFile($fileNameWithPath): string
{
    $content = "";

    if (!$myfile = fopen($fileNameWithPath, "r")) {
        return "";
    }
    $content = fread($myfile, filesize($fileNameWithPath));
    fclose($myfile);
    return $content;
}


/**
 * writeContentIntoFile
 *
 * @param  mixed $fileNameWithPath
 * @param  mixed $content
 * @return bool
 */
function writeContentIntoFile($fileNameWithPath, $content): bool
{
    $action = "wb"; //crealo

    if (!$fp = fopen($fileNameWithPath, $action)) {
        return false;
    }
    if (fwrite($fp, $content) === false) {
        return false;
    }
    fclose($fp);
    //echo "File aggiornamto correttamente!<br>";
    return true;
}
