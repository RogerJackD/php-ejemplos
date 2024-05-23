<?php
    include("14herencia.php");

    echo "EJEMPLO DE HERENCIA CON ANIMALES\n";

    $perro = new Perro("Coimita","Verde",false,"perro.mp3");
    
    echo $perro->obtenerInformacion()."\n";
    echo $perro->hacerSonido("Guauu");
?>