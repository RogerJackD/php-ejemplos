<?php

try {
    $dsn="mysql:host=localhost;dbname=escuela";//dsn: data source name , nombre origen de datos
    $user="root";//user : usuario
    $pass="mysql114114";//pass : clave de usuario
    $dbh = new PDO($dsn, $user, $pass);
    echo "Hola base de datos tengo conexion"."\n";
    $alumnos = $dbh->query('SELECT * FROM alumnos ');
    foreach ($alumnos as $row) {
        echo $row["Id_Alumno"]." ".$row["Nomb_Alumno"]." ".$row["Apel_Alumno"]." ".$row["Dire_Alumno"]."\n";
        
    }
} catch (PDOException $e) {
    // attempt to retry the connection after some timeout for example
    echo "Error : ".$e->getMessage();
}
?>