<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocomplete Ajax</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script> //Funzione per mostrare i suggerimenti per i nomi
        function showHintAll(searchTerm, elemName, destination) {
            if (searchTerm.length == 0) {
                document.getElementById(elemName).innerHTML = "";//Cancella i suggerimenti se la casella di input è vuota
                return;
            } else {
                // Manda una XMLHttpRequest per ottenere i suggerimenti per i numeri
                var xmlhttp2 = new XMLHttpRequest();
                xmlhttp2.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {//status 200 => risposta positiva alla richiesta dati
                        //aggiorna il suggerimento con la risposta
                        document.getElementById(elemName).innerHTML = this.responseText;
                    }
                };

                if (destination == "num") {
                    xmlhttp2.open("GET", "gethint_numbers.php?searchTerm=" + searchTerm, true);
                    //  console.log("Ricerco numero");
                } else {
                    xmlhttp2.open("GET", "gethint_names.php?searchTerm=" + searchTerm, true);
                    //  console.log("Ricerco nome");
                }
                xmlhttp2.send();
            }
        }
        //TODO inserire bottone per cancellazione campi
    </script>
</head>

<body class="p-5">
    <div class="bg-dark border rounded shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="p-3 mb-2 bg-info-subtle text-info-emphasis">
            <p class="p-3 mb-2 bg-dark text-white text-center"><b>Scrivi il nome che cerchi:</b></p>
            <form class="container-md" action="">
                <div class="mb-3">
                    <label class="form-label" for="fname">Nome:</label>
                    <input class="form-control" type="text" id="ftel" name="ftel"
                        onkeyup="showHintAll(this.value,'txtHint','anagrafica')">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="ftel">Telefono:</label>
                    <input class="form-control" type="text" id="ftel" name="ftel"
                        onkeyup="showHintAll(this.value,'txtTel','num')">
                </div>
            </form>
        </div>
        <div class="p-3 mb-2 bg-dark text-white">
            <p class="ps-3"><strong>Suggerimento nome: </strong></p>
            <p class="p-3 mb-2 bg-light text-dark" id="txtHint"></p>
            <p class="ps-3 pt-3"><strong>Suggerimento telefono: </strong></p>
            <p class="p-3 mb-2 bg-light text-dark" id="txtTel"></p>
        </div>
    </div>
</body>

</html>