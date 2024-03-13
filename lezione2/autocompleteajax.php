<html>

<head>
    <script>
        function showHint(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</head>

<body>
    <p><b>Scrivi il nome che cerchi:</b></p>
    <form action="">
        <label for="fname">Nome:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
        <label for="ftel">Telefono:</label>
        <input type="text" id="ftel" name="ftel" onkeyup="showTel(this.value)">
    </form>
    <p>Suggerimento nome: <span id="txtHint"></span></p>
    <p>Suggerimento telefono: <span id="txtTel"></span></p>
</body>

</html>