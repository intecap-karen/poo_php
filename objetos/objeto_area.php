<?php
    require_once("../clases/Area.php");
    $area = new Area();
    $area->base = $_POST['base'];
    $area->altura = $_POST['altura'];
    
    if (isset($_POST["btn-area"])) {
        echo "<br>";
        echo $area->calcularArea();
    }

?>