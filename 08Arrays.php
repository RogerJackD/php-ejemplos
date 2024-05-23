<?php 

$numeros = array(1,3,5,2,5);

$frutas = ["fresa","naranga"."manzana","mandarina"];

print_r ($numeros);

print_r ($frutas);



$estudiante = array(

  "dni" => "2145",

  "edad" => 27,

  "fechanacimiento" =>"200-02-02",

  "nombres"=>"jilberton",

  "apellidos"=>"acero",

  "semestre"=>3,

  "deuda"=>2992.00,

  "notafinal"=> 21.2);



 print_r($estudiante);



  foreach($estudiante as $key=>$value) {

    echo $key." - ".$value."\n";

  }

  $estudiante1 = array(

    "dni" => "21245",

    "edad" => 27,

    "fechanacimiento" =>"2000-02-02",

    "nombres"=>"jilberrto",

    "apellidos"=>"chocomboli",

    "semestre"=>3,

    "deuda"=>992.00,

    "notafinal"=> 21.2);

    

    $estudiante2 = array(

      "dni" => "21145",

      "edad" => 17,

      "fechanacimiento" =>"2000-02-02",

      "nombres"=>"anuel",

      "apellidos"=>"acero",

      "semestre"=>3,

      "deuda"=>92.00,

      "notafinal"=> 11.2);



      $estudiante3 = array(

        "dni" => "002145",

        "edad" => 22,

        "fechanacimiento" =>"2000-02-02",

        "nombres"=>"pedron",

        "apellidos"=>"yafue",

        "semestre"=>3,

        "deuda"=>29992222.00,

        "notafinal"=> 01.2);

        $estudiantes = array($estudiante1, $estudiante2, $estudiante3);

        foreach ($estudiantes as $key1 => $value){

          echo "Estudiante N°".($key1+1)."\n";

          foreach($estudiante as $key=>$value){

            echo $key." - ".$value."\n";

          }

        }

        echo "----------------------------------------\n";

        for($i =0 ; $i<=count($estudiantes)-1;$i++){

          echo"Estudiante N° ".($i+1)."\n";

          echo "dni - ".$estudiantes[$i]["dni"]."\n"; 

          echo "edad - ".$estudiantes[$i]["edad"]."\n"; 

          echo "fechanacimiento - ".$estudiantes[$i]["fechanacimiento"]."\n"; 

          echo "nombres - ".$estudiantes[$i]["nombres"]."\n"; 

          echo "apellidos - ".$estudiantes[$i]["apellidos"]."\n"; 

          echo "semestre - ".$estudiantes[$i]["semestre"]."\n"; 

          echo "deuda - ".$estudiantes[$i]["deuda"]."\n"; 

          echo "notafinal - ".$estudiantes[$i]["notafinal"]."\n"; 





        }

        $estudiante3["norafinal"] = 17.6;

        $equipo1 = ["messi","cueve","neymaar"];

        $equipo2 = ["advincula","lewandoski","ronaldiño"];

        $equipos = array_merge($equipo1,$equipo2);

        foreach($equipos as $key=>$equipo){

          echo $equipo."\n";

        }



?>