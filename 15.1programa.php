<?php
include("15.polimorfismo.php");


echo "AREA DE TRIANGULO\n";
echo "INGRESE LA BASE: ";
$b = fgets(STDIN);
echo "INGRESE LA ALTURA: ";
$h = fgets(STDIN);
$triangulo = new Triangulo($b, $h);
$area = $triangulo->calcularArea();
echo "EL AREA DEL TRIANGULO ES: " . $area . "\n";

echo "AREA DEL RECTANGULO\n";
echo "INGRESE LA BASE: ";
$b = fgets(STDIN);
echo "INGRESE LA ALTURA: ";
$h = fgets(STDIN);
$rectangulo = new Rectangulo($b, $h);
$area = $rectangulo->calcularArea();
echo "EL AREA DEL RECTANGULO ES: " . $area . "\n";
/////////
echo "AREA DEL CUADRADO\n";
echo "INGRESE el lado: ";
$l = fgets(STDIN);

$cuadrado = new cuadrado($l);
$area = $cuadrado->calcularArea();
echo "EL AREA DEL cuadrado ES: " . $area . "\n";

///
echo "AREA DEL CIRCULO\n";
echo "INGRESE RADIO: ";
$r = fgets(STDIN);

$circulo = new circulo($r);
$area = $circulo->calcularArea();
echo "EL AREA DEL circulo ES: " . $area . "\n";





?>