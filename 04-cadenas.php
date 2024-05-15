<?php
$cadena = "el curso ha terminado";
echo " el texto en mayuscula: ".strtoupper($cadena)."\n";
echo " el texto en minuscula: ".strtolower($cadena)."\n";
echo " el texto tiene: ".strlen($cadena). " caracteres"."\n";
echo " el texto dice ahora: ".
str_replace("terminado","finalizado",$cadena);
?>