<?php
$contador = 1;
$sumanota= 0;
while ($contador<=3){
    echo "ingrese sus notas: ";
    $notas = fgets(STDIN);

    $sumanota = $sumanota + $notas;
    $contador++;

}
$notapromedio = $sumanota/3;
echo "\n el promedio de n0tas es: ".$notapromedio."\n";

//logica permiter dar el mayor numero de 5 numeros
$mayor = 0;
for ($i = 1; $i <= 5; $i++) {
    echo "Ingrese su numero: ";
    $numero = fgets(STDIN);
    if ($mayor < $numero) {
        $mayor = $numero;
    }
}
echo "El mayor numero es: " . $mayor;

//logica permiter dar el MENOR numero de 5 numeros


for ($i = 1; $i <= 5; $i++) {
    echo "Ingrese su numero: ";
    $numero = fgets(STDIN);
    if ($mayor > $numero) {
        $mayor = $numero;
    }
}
echo "El menor numero es: " . $mayor;

?>