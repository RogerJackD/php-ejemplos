<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
    $id = $_POST['id'];
    echo $id;//print_r($nombre,true);
    $dsn="mysql:host=localhost;dbname=covid";
    $user="root";//user : usuario
    $pass="root";//pass : clave de usuario
    $db = new PDO($dsn, $user, $pass);        
    $pacientes = $db->query("
    UPDATE pacientes
    where id = '%$id%'");
    foreach ($pacientes as $row) {
        array_push($resultado,$row);
    }    
    echo json_encode($resultado);        
    } catch (PDOException $e) {        
        echo "Error : ".$e->getMessage();
    }

        } 
?>