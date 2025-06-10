<?php
    require_once("../clases/ParImpar.php");
    // Crear una instancia de la clase ParImpar
    $resultado = new ParImpar();
    $resultado->numero = $_POST['numero'];

    if (isset($_POST["btn-par-impar"])) {
        echo "<br>";
        echo $resultado->determinarParImpar();
    }
?>