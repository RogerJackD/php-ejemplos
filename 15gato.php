<?php
    include("15herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES\n";

    $perro = new Perro("gaturro","Verde",false,"catt.mp3");
    
    echo $perro->obtenerInformacion()."\n";
    echo $perro->hacerSonido("miauu");
?>