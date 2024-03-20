<?php
require_once "inc/functions.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $myStoreName; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="js/storescript.js"></script>
</head>

<body>
    <container>
        <div class="container">
            <h3>
                <?php echo $shopIcon; ?>
                <?php echo $myStoreName; ?>
            </h3>
            <header class="p-3 text-bg-dark">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                            <?php echo $logo; ?>
                        </a>

                        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Prodotti</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Carrello</a></li>

                        </ul>

                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                            <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Cerca"
                                aria-label="Search">
                        </form>

                        <div class="text-end">
                            <button type="button" class="btn btn-warning">Admin</button>
                        </div>
                    </div>
                </div>
            </header>