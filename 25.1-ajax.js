function buscarPacientes() {
    const $nombre = $("#nombre").val();
    //alert("Buscando..."+nombre);
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {
            debugger;
            console.log(result);
            const pacientes=$.parseJSON(result);
            pacientes.forEach(item => {
                agregarFilas("#tabla",item);
            });

        }
    })


    return;
}

function eliminarpaciente(){
    nost
}



////////////////////////////////////////////////

function actualizar() {
    const $nombre = $("#nombre2").val();
   
    let datos ={
        nombre : $nombre
    };
    $.ajax({
        url :"26.1-update-ajax-pdo.php",
        type : "post",
        data : datos,
        success : function(result) {              
            alert("Se guardo los datos correctamente de "+result);            
        }
    })
 
 
    return;
}
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}

/////////////////////////////////////////
function agregarFilas(id,paciente) {
    const html=
    "<tr>"+
    "<td>"+paciente.id+"</td>"+
    "<td>"+paciente.nombres+"</td>"+
    "<td>"+paciente.edad+"</td>"+    
    "<td>"+paciente.talla_m+"</td>"+
    "<td>"+paciente.peso_kg+"</td>"+
    "<td>"+paciente.sintoma_tos+"</td>"+
    "<td>"+paciente.sintoma_fiebre+"</td>"+
    "<td>"+paciente.sintoma_disnea+"</td>"+
    "<td>"+paciente.sintoma_dolormuscular+"</td>"+
    "<td>"+paciente.sintoma_gripe+"</td>"+
    "<td>"+paciente.sintoma_presionalta+"</td>"+
    "<td>"+paciente.sintoma_fatiga+"</td>"+
    "<td>"+paciente.sintoma_garraspera+"</td>"+


    "<td><button type='button' onclick=editar('"+paciente.id+"',"+paciente.nombres+"','"+paciente.edad+"','"+paciente.talla_m+"','"+paciente.peso_kg+"','"+paciente.sintoma_tos+"','"+paciente.sintoma_fiebre+"','"+paciente.sintoma_disnea+"','"+paciente.sintoma_dolormuscular+"','"+paciente.sintoma_gripe+"','"+paciente.sintoma_presionalta+"','"+paciente.sintoma_fatiga+"','"+paciente.sintoma_garraspera+"');>Editar</button></td>"+
    "</tr>";
    $(id+" tr:last").after(html);
}
 
function editar(id,nombres,edad,talla,peso,tos,fiebre,disnea,dolormuscular,gripe,presionalta,fatiga,garraspera) {
    $('#exampleModal').modal('show');    
    $("#id2").val(id);
    $("#nombre2").val(nombres);
    $("#edad2").val(edad);
    $("#talla2").val(talla);
    $("#peso2").val(peso);

    if (tos == 1) {

        $('#tos2').prop('checked', true);
    
      } else {
    
        $('#tos2').prop('checked', false);
    
      }
    if (fiebre == 1) {

        $('#fiebre2').prop('checked', true);
    
      } else {
    
        $('#fiebre2').prop('checked', false);
    
      }
    if (disnea == 1) {

        $('#disnea2').prop('checked', true);
    
      } else {
    
        $('#disnea2').prop('checked', false);
    
      } 

    if (dolormuscular == 1) {

        $('#dolormuscular2').prop('checked', true);
    
      } else {
    
        $('#dolormuscular2').prop('checked', false);
    
      }
    if (gripe == 1) {

        $('#gripe2').prop('checked', true);
    
      } else {
    
        $('#gripe22').prop('checked', false);
    
      }
    if (presionalta == 1) {

        $('#presionalta2').prop('checked', true);
    
      } else {
    
        $('#presionalta2').prop('checked', false);
    
      }
    if (fatiga == 1) {

        $('#fatiga2').prop('checked', true);
    
      } else {
    
        $('#fatiga2').prop('checked', false);
    
      }
    if (garraspera == 1) {

        $('#garraspera2').prop('checked', true);
    
      } else {
    
        $('#garraspera2').prop('checked', false);
    
      }



      
    
    
   





}
$(document).ready(function() {

    $('#exampleModal').on('hidden.bs.modal', function () {
    
    // Limpiar todos los campos del formulario
    
    $(this).find('input[type="text"]').val('');
    
    $(this).find('input[type="number"]').val('');
    
    $(this).find('input[type="checkbox"]').prop('checked', false);
    
    });
    
    });

