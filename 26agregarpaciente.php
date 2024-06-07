<?php
var_dump($_POST);

$dsn = 'mysql:host=localhost;dbname=covid';
$username = 'root';
$password = 'mysql114114';

try {
    
    $conn = new PDO($dsn, $username, $password);
    // Configuración para que PDO lance excepciones en caso de errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener los datos del POST
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];
    $tos = $_POST['tos'];
    $fiebre = $_POST['fiebre'];
    $disnea = $_POST['disnea'];
    $dolormuscular = $_POST['dolormuscular'];
    $gripe = $_POST['gripe'];
    $presionalta = $_POST['presionalta'];
    $fatiga = $_POST['fatiga'];
    $garraspera = $_POST['garraspera'];

   
    $sql = "INSERT INTO tu_tabla (nombre, edad, talla, peso, tos, fiebre, disnea, dolormuscular, gripe, presionalta, fatiga, garraspera) VALUES (:nombre, :edad, :talla, :peso, :tos, :fiebre, :disnea, :dolormuscular, :gripe, :presionalta, :fatiga, :garraspera)";

    
    $stmt = $conn->prepare($sql);

    // Bind de parámetros
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':edad', $edad);
    $stmt->bindParam(':talla', $talla);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':tos', $tos);
    $stmt->bindParam(':fiebre', $fiebre);
    $stmt->bindParam(':disnea', $disnea);
    $stmt->bindParam(':dolormuscular', $dolormuscular);
    $stmt->bindParam(':gripe', $gripe);
    $stmt->bindParam(':presionalta', $presionalta);
    $stmt->bindParam(':fatiga', $fatiga);
    $stmt->bindParam(':garraspera', $garraspera);

    
    $stmt->execute();

    // Enviar una respuesta JSON
    echo json_encode(["success" => true]);
} catch(PDOException $e) {
    
    echo json_encode(["success" => false, "error" => $e->getMessage()]);
}


$conn = null;
?>
