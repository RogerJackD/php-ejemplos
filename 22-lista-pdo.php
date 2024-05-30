<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
</head>
<body>
    <center><h1>Busqueda de Pacientes</h1></center>
    <form action="22.1-consulta-pdo.php" method="GET">
        <input type="text" name="nombre" placeholder="Ingresa nombre" /><br>
        <label>Tos</label><input type="checkbox" name="tos">
        <label>Fiebre</label><input type="checkbox" name="fiebre">
        <label>Disnea</label><input type="checkbox" name="disnea">
        <label>Dolor Muscular</label><input type="checkbox" name="dolor_muscular">
        <label>presion alta</label><input type="checkbox" name="dolor_muscular">
        <label>fatigar</label><input type="checkbox" name="dolor_muscular">
        <label>garraspera</label><input type="checkbox" name="dolor_muscular">

        <button type="submit">Buscar</button>
    </form>
    <table style="border: 1px solid black;">
        <tr>
            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>Dolor Muscular</td>
            <td>Presión Alta</td>
            <td>Fatiga</td>
            <td>Garraspera</td>
            <td>Acciones</td>
        </tr>
        
    </table>
</body>
</html>