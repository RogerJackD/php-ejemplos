<?php
    $luzencendido=false;

    if($luzencendido){
        echo "luz esta apagada";
    }
    else{
    
    echo"la luz esta apagada";

    $sintomas_covid =[
        "tos" => true,
        "fiebre" => false,
        "dolor" => false,
        "perdida olfato" => false
    ];
}

//caso 03

    if($sintomas_covid)["tos"]&&
        $sintomas_covid["fiebre"]{
        echo "estass enfermo tienes covid";
    }
    else{
        echo "aun no tienes covid";
    }
?>