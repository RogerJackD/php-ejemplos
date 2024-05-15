<?php



function obtenerSaludo($parametro) {

  return "Hola como estas ".$parametro;

}



function mostrarDatos($nombres,$apellidos,$curso,$semestre){

  $mensaje = "Hola soy ".$nombres." ".$apellidos

  ." y estoy en el curso ".$curso." del ".$semestre;

  return $mensaje;

}
function calcular($operador,$num1,$num2){
    if($operador=="+")
        return $num1+$num2;
    if($operador=="-")
        return $num1-$num2;
    if($operador=="*")
        return $num1*$num2;
    if($operador=="/")
        return $num1/$num2;
    
    

}



echo obtenerSaludo("roger")."\n";

echo mostrarDatos("roger","jack",

"backend developer web","tercer semestre")."\n";
echo "el total de la suma es:" .calcular("/",0,22);
?>