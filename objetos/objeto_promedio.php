<?php
    require_once("../clases/Promedio.php");
    //Crear un objeto = instancia de la clase (instanciar una clase) = Crear un elemento de una clase especifica
    $operaciones = new Promedio();
    //$operaciones es un objeto de tipo Promedio
    $operaciones->valor1 = $_POST["valor1"];
    $operaciones->valor2 = $_POST["valor2"];
    $operaciones->valor3 = $_POST["valor3"];

    if (isset($_POST["btn-promedio"])) {
        echo "<br>";
        echo $operaciones->calcularPromedio();
    }

?>