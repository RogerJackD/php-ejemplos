<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO PACIENTE</title>
    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #555;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        .Botones {
            text-align: center;
            margin-top: 20px;
        }
        .Botones button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin: 5px;
        }
        .Botones button:hover {
            background-color: #0056b3;
        }
        .Botones button[type="button"] {
            background-color: #6c757d;
        }
        .Botones button[type="button"]:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    

        
    <h1>Registro de Paciente</h1>
    <form id="formulario" action="21pdopost.php" method="post">    
        <label for="nombre">Nombres:</label> 
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="apellido">Apellidos:</label>
        <input type="text" id="apellido" name="apellido"><br>
        <label for="edad">Edad :</label>
        <input type="text" id="edad" name="edad" required /><br>
        <label for="talla">Talla (cm):</label>
        <input type="text" id="talla" name="talla" required /><br>
        <label for="peso">Peso (kg):</label>
        <input type="text" id="peso" name="peso"><br>
        <h2><u>Síntomas</u></h2>


        <input type="checkbox" name="tos" id="tos" value ="1">
        <label for="tos">Tos</label><br>
        <input type="checkbox" name="fiebre" id="fiebre" value ="1">
        <label for="fiebre">Fiebre</label><br>
        <input type="checkbox" name="disnea" id="disnea" value ="1">
        <label for="disnea">Disnea</label><br>
        <input type="checkbox" id="dolor_muscular" name="dolor_muscular" value ="1">
        <label for="dolor_muscular">Dolor muscular</label><br>
        <input type="checkbox" id="gripe" name="gripe" value ="1">
        <label for="gripe">Gripee</label><br>
        <input type="checkbox" id="Presion_alta" name="Presion_alta" value ="1">
        <label for="Presion_alta">Presión Alta</label><br>    
        <input type="checkbox" id="Fatiga" name="Fatiga" value ="1">
        <label for="Fatiga">Fatiga</label><br>
        <input type="checkbox" id="Garraspera" name="Garraspera" value ="1">

        <label for="Garraspera">Garraspera</label><br>
        <label for="fecha">**Fecha de vacunación:**</label>
        <input type="date" id="fecha" name="fecha">
        <div class="Botones">
            <br>
            <button type="submit">Guardar</button>
            <button type="button">Cancelar</button>
        </div>
    </form>    
</body>
</html>
