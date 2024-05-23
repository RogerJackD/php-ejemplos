<?php
//realiozar un programa que permita imprimir los 3 colores del semaforo
//si es semaforo esta en rojo debe decir "pare"
//si el semaforo esta en amarillo "espera"
// verde "avance"
//para ello el programa debe pedir al usuario que ingrese un numero o letra
//

echo "1)ROJO"."\n";
echo "2)AMARILLO"."\n";
echo "3)VERDE"."\n";
echo " ingresa numero: ";

$num1 = fgets(STDIN);
if ($num1 == "1") {
    echo "semaforo en rojo"."\n";
    echo "PARE";
}
elseif ($num1 == "2") {
    echo "semaforo en amarillo"."\n";
    echo "ESPERA";

}
elseif ($num1 == "3") {
    echo "semaforo en verde"."\n";
    echo "AVANZA";

}
else{
    echo "OPCION INVALIDA";
}





?>