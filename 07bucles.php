<?php

$contador = 1;
$sumanota= 0;
while ($contador<=3){
    echo "ingrese sus notas: ";
    $notas = fgets(STDIN);

    $sumanota = $sumanota + $notas;
    $contador++;

}
$notapromedio = $sumanotas/3;
echo "\n el promedio de n0tas es: ".$notapromedio;

//logica permiter dar el mayor numero de 5 numeros
$mayor = 0
for($i=1,$i<=5; $i++) {
    echo "ingrese su numero: ";
    $numero = fgets(STDIN);
    if($mayor<$numero){
        $mayor=$numero;
    }
}
?>