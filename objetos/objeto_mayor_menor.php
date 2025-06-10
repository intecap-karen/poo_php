<?php
    require_once("../clases/MayorMenor.php");
    // Crear una instancia de la clase MayorMenor
    $resultado = new MayorMenor();
    $resultado->numero1 = $_POST['numero1'];
    $resultado->numero2 = $_POST['numero2'];
    $resultado->numero3 = $_POST['numero3'];

    if (isset($_POST["btn-mayor-menor"])) {
        echo "<br>";
        echo $resultado->encontrarMayorMenor();
    }
?>