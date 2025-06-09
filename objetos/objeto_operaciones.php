<?php
    require_once("../clases/OperacionesBasicas.php");
    //Crear un objeto = instancia de la clase (instanciar una clase) = Crear un elemento de una clase especifica
    $operaciones = new OperacionesBasicas();
    //$operaciones es un objeto de tipo OperacionesBasicas
    $operaciones->valor1 = $_POST["valor1"];
    $operaciones->valor2 = $_POST["valor2"];

    if (isset($_POST["btn-suma"])) {
        echo "<br>";
        echo $operaciones->sumar();
    }
    else if (isset($_POST["btn-resta"])) {
        echo "<br>";
        echo $operaciones->restar();
    }
    else if (isset($_POST["btn-multi"])) {
        echo "<br>";
        echo $operaciones->multiplicar();
    }
    else{
        echo "<br>";
        echo $operaciones->dividir();
    }

?>