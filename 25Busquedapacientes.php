<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>    
    <center><h1>Busqueda de Pacientes</h1></center>
    <!-- <form action="22.1-consulta-pdo.php" method="POST"> -->
    <input type="text" placeholder="Escribe aqui" name="nombre" id="nombre" /><br>
    <label id="tos" name="tos">Tos</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">fiebre</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">disnea</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">dolor muscular</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">gripe</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">presion alta</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">fatiga</label><input type="checkbox" for="tos">
    <label id="tos" name="tos">garraspera</label><input type="checkbox" for="tos">



    <button type="button" onclick="buscarPacientes();">Buscarr</button>

    
    <table style="border: 1px solid black;" id="tabla">
        <tr>
            <td>id</td>

            <td>Paciente</td>
            <td>Edad</td>
            <td>Talla</td>
            <td>Peso</td>
            <td>Tos</td>
            <td>Fiebre</td>
            <td>Disnea</td>
            <td>DolorM</td>
            <td>Gripe</td>
            <td>Presion</td>
            <td>Fatiga</td>
            <td>garraspera</td>


            <td>Acciones</td>
        </tr>          
    </table>
    <!-- </form> -->
    <script type="text/javascript"
    src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="25.1-ajax.js"></script>
 
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
        Nuevo Pacientee
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario editar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id2" name="id2"/>



                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre2" name="nombre2"/>


                    <label for="name" class="form-label">edad:</label>
                    <input type="text" class="form-control" id="edad2" name="edad2"/>

                    <label for="name" class="form-label">talla:</label>
                    <input type="text" class="form-control" id="talla2" name="talla2"/>

                    <label for="name" class="form-label">peso:</label>
                    <input type="text" class="form-control" id="peso2" name="peso2"/>

                    <label  name="tos">Tos</label> <br>
                    <input type="checkbox" for="tos2" id="tos2" > <br>

                    <label  name="tos">fiebre</label> <br>
                    <input type="checkbox" for="fiebre2" id="fiebre2"> <br>

                    <label  name="tos">Disnea</label> <br>
                    <input type="checkbox" for="disnea2" id="disnea2"> <br>


                    <label name="tos">Dolor muscular</label> <br>
                    <input type="checkbox" for="dolormuscular2" id="dolormuscular2"> <br>


                    <label  name="tos">Gripe</label> <br>
                    <input type="checkbox" for="gripe2" id="gripe2"> <br>


                    <label name="tos">Presion alta</label> <br>
                    <input type="checkbox" for="presionalta2" id="presionalta2"> <br>


                    <label  name="tos">fatiga</label> <br>
                    <input type="checkbox" for="fatiga2" id="fatiga2"> <br>

                    <label  name="tos">garraspera</label> <br>
                    <input type="checkbox" for="garraspera2" id="garraspera2"> <br>

                    




                    
                    <button class="btn btn-primary" onclick="actualizar();" >Guardar</button>
                    <button class="btn btn-primary" onclick="cancelar();">cancelar</button>







                </div>
            </div>
        </div>
    </div>

    
</body>
</html>