<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Obtener los datos del POST
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $talla = $_POST["talla"];
        $peso = $_POST["peso"];
        $tos = $_POST["tos"];
        $fiebre = $_POST["fiebre"];
        $disnea = $_POST["disnea"];
        $dolormuscular = $_POST["dolormuscular"];
        $gripe = $_POST["gripe"];
        $presionalta = $_POST["presionalta"];
        $fatiga = $_POST["fatiga"];
        $garraspera = $_POST["garraspera"];

        // Verificar que el nombre no esté vacío
        if (empty($nombre)) {
            throw new Exception("El nombre del paciente es requerido");
        }

        // Conexión a la base de datos
        $dsn = "mysql:host=localhost;dbname=covid";
        $user = "root";
        $pass = "mysql114114";
        $db = new PDO($dsn, $user, $pass);

        // Construir la consulta de actualización
        $query = "
            UPDATE pacientes
            SET nombres = :nombre,
                edad = :edad,
                talla_m = :talla,
                peso_kg = :peso,
                sintoma_tos = :tos,
                sintoma_fiebre = :fiebre,
                sintoma_disnea = :disnea,
                sintoma_dolormuscular = :dolormuscular,
                sintoma_gripe = :gripe,
                sintoma_presionalta = :presionalta,
                sintoma_fatiga = :fatiga,
                sintoma_garraspera = :garraspera
            WHERE id = :id
        ";

        // Preparar y ejecutar la consulta
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
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

        if ($stmt->execute()) {
            echo "Paciente actualizado correctamente";
        } else {
            $errorInfo = $stmt->errorInfo();
            echo "Error en la actualización: " . $errorInfo[2];
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
