<?php
    ECHO "INGRESA SU EDAD: ";
    $edadestudiante1= fgets(STDIN);
    $edadestudiante2= 21;

    if($edadestudiante1 > $edadestudiante2){
        echo "el estudiante 1 es mayor que el estudainte 2"."\n";
    }
    elseif($edadestudiante1 < $edadestudiante2){
        echo "el estudiante 2 es mayor al 1"."\n";

    }
    else {
        echo " ambos  estudiantes son la misma edad"."\n";
    }
    echo "ingrese su nota final: ";
    $notafinal = fgets(STDIN);
    if($notafinal == 10.5){
        echo "usted esta aprobado a la justas";
    }
    elseif($notafinal < 10.5){
        echo "usted esta desaprobado";
    }
    elseif(10.5 < $notafinal && $notafinal <=15){
        echo "usted esta aprobado de foma regular";
    }
    else{
        echo"estas muy bien aprobad0";
    }
    


?>