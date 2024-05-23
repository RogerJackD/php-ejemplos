<?php
include("09libreria.php");
echo "ingresa primer numero";
$num1=fgets(STDIN);

echo "ingresa primer numero";
$num2=fgets(STDIN);

$resultado = multi ($num1,$num2);
echo "el producto de ".$num1."*".$num2." es ".$resultado."\n";


?>