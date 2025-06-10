<?php
    require_once("../clases/InvertirTexto.php");
    // Crear una instancia de la clase InvertirTexto
    $invertirTexto = new InvertirTexto();
    $invertirTexto->texto = $_POST['texto'];

    if (isset($_POST["btn-invertir"])) {
        echo "<br>";
        echo $invertirTexto->invertir();
    }
?>