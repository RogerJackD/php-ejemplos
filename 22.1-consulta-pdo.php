<?php
// Configuración de la base de datos
$dsn = "mysql:host=localhost;dbname=covid";
$user = "root";
$pass = "";

try {
    // Conexión a la base de datos usando PDO
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit();
}

$nombre = '';
$tos_checked = '';
$fiebre_checked = '';
$disnea_checked = '';
$dolor_muscular_checked = '';
$presion_alta_checked = '';
$fatiga_checked = '';
$garraspera_checked = '';

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Inicializar la lista de síntomas seleccionados
    $sintomas_seleccionados = [];

    // Verificar si se han marcado los checkboxes de síntomas
    if (isset($_GET['tos'])) {
        $tos_checked = 'checked';
    }
    if (isset($_GET['fiebre'])) {
        $fiebre_checked = 'checked';
    }
    if (isset($_GET['disnea'])) {
        $disnea_checked = 'checked';
    }
    if (isset($_GET['dolor_muscular'])) {
        $dolor_muscular_checked = 'checked';
    }
    if (isset($_GET['presion_alta'])) {
        $presion_alta_checked = 'checked';
    }
    if (isset($_GET['fatiga'])) {
        $fatiga_checked = 'checked';
    }
    if (isset($_GET['garraspera'])) {
        $garraspera_checked = 'checked';
    }

    // Construir la parte de la consulta SQL para los síntomas
    $sintomas_query = '';
    if (!empty($_GET['tos'])) {
        $sintomas_query .= " AND sintoma_tos = '1'";
    }
    if (!empty($_GET['fiebre'])) {
        $sintomas_query .= " AND sintoma_fiebre = '1'";
    }
    if (!empty($_GET['disnea'])) {
        $sintomas_query .= " AND sintoma_disnea = '1'";
    }
    if (!empty($_GET['dolor_muscular'])) {
        $sintomas_query .= " AND sintoma_dolormuscular = '1'";
    }
    if (!empty($_GET['presion_alta'])) {
        $sintomas_query .= " AND sintoma_presionalta = '1'";
    }
    if (!empty($_GET['fatiga'])) {
        $sintomas_query .= " AND sintoma_fatiga = '1'";
    }
    if (!empty($_GET['garraspera'])) {
        $sintomas_query .= " AND sintoma_garraspera = '1'";
    }

    // Consulta SQL para buscar pacientes con nombre y síntomas seleccionados
    $sql = "SELECT * FROM pacientes WHERE nombres LIKE :nombre $sintomas_query";

    $stmt = $conn->prepare($sql);
    $stmt->execute(['nombre' => "%$nombre%"]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $result = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Pacientes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <center><h1>Lista de Pacientes</h1></center>
    <form method="GET" action="22.1-consulta-pdo.php">
        <input type="text" name="nombre" placeholder="Ingresa nombre" value="<?php echo htmlspecialchars($nombre); ?>">
        <label>Tos</label><input type="checkbox" name="tos" <?php echo $tos_checked; ?>>
        <label>Fiebre</label><input type="checkbox" name="fiebre" <?php echo $fiebre_checked; ?>>
        <label>Disnea</label><input type="checkbox" name="disnea" <?php echo $disnea_checked; ?>>
        <label>Dolor Muscular</label><input type="checkbox" name="dolor_muscular" <?php echo $dolor_muscular_checked; ?>>
        <label>Presión Alta</label><input type="checkbox" name="presion_alta" <?php echo $presion_alta_checked; ?>>
        <label>Fatiga</label><input type="checkbox" name="fatiga" <?php echo $fatiga_checked; ?>>
        <label>Garraspera</label><input type="checkbox" name="garraspera" <?php echo $garraspera_checked; ?>>
        <button type="submit">Buscar</button>
    </form>
    <br>
    <table>
        <thead>
            <tr>
                <th>Paciente</th>
                <th>Edad</th>
                <th>Talla (m)</th>
                <th>Peso (kg)</th>
                <th>Tos</th>
                <th>Fiebre</th>
                <th>Disnea</th>
                <th>Dolor Muscular</th>
                <th>Presión Alta</th>
                <th>Fatiga</th>
                <th>Garraspera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($result)) {
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>{$row['nombres']} {$row['apellidos']}</td>";
                    echo "<td>{$row['edad']}</td>";
                    echo "<td>{$row['talla_m']}</td>";
                    echo "<td>{$row['peso_kg']}</td>";
                    echo "<td>".($row['sintoma_tos'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_fiebre'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_disnea'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_dolormuscular'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_presionalta'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_fatiga'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td>".($row['sintoma_garraspera'] == '1' ? 'Sí' : 'NO')."</td>";
                    echo "<td><button>Editar</button> <button>Eliminar</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No se encontraron registros</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
