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
////////////////////////
function guardarNuevoPaciente() {
  // Obtener valores del formulario
  const nombre = $("#nombre2").val();
  const edad = $("#edad2").val();
  const talla = $("#talla2").val();
  const peso = $("#peso2").val();
  const tos = $("#tos2").prop('checked') ? 1 : 0;
  const fiebre = $("#fiebre2").prop('checked') ? 1 : 0;
  const disnea = $("#disnea2").prop('checked') ? 1 : 0;
  const dolormuscular = $("#dolormuscular2").prop('checked') ? 1 : 0;
  const gripe = $("#gripe2").prop('checked') ? 1 : 0;
  const presionalta = $("#presionalta2").prop('checked') ? 1 : 0;
  const fatiga = $("#fatiga2").prop('checked') ? 1 : 0;
  const garraspera = $("#garraspera2").prop('checked') ? 1 : 0;

  console.log("Nombre:", nombre);
  console.log("Edad:", edad);
  console.log("Talla:", talla);
  console.log("Peso:", peso);
  console.log("Tos:", tos);
  console.log("Fiebre:", fiebre);
  console.log("Disnea:", disnea);
  console.log("Dolor Muscular:", dolormuscular);
  console.log("Gripe:", gripe);
  console.log("Presión Alta:", presionalta);
  console.log("Fatiga:", fatiga);
  console.log("Garraspera:", garraspera);

  // Enviar datos al servidor usando AJAX
  $.ajax({
      url: "26agregarpaciente.php",
      type: "POST",
      data: {
          nombre: nombre,
          edad: edad,
          talla: talla,
          peso: peso,
          tos: tos,
          fiebre: fiebre,
          disnea: disnea,
          dolormuscular: dolormuscular,
          gripe: gripe,
          presionalta: presionalta,
          fatiga: fatiga,
          garraspera: garraspera
      },
      dataType: 'json',
      success: function(response) {
          console.log(response);
          if (response.success) {
              alert("Nuevo paciente agregado correctamente");
              $('#exampleModal').modal('hide');
          } else {
              alert("Error al agregar nuevo paciente: " + response.error);
          }
      },
      error: function(xhr, status, error) {
          alert("Error al agregar nuevo paciente: " + error);
      }
  });
}


///////////////////////

function eliminarpaciente(){
    nost
}

function nuevoPaciente() {
  // Abrir el modal
  $('#exampleModal').modal('show');
  
  // Limpiar los campos del formulario
  $("#nombre2").val('');
  $("#edad2").val('');
  $("#talla2").val('');
  $("#peso2").val('');
  $("input[type='checkbox']").prop('checked', false);
}



////////////////////////////////////////////////

function actualizar() {
  const $id = $("#id2").val();
  const $nombre = $("#nombre2").val();
  const $edad = $("#edad2").val();
  const $talla = $("#talla2").val();
  const $peso = $("#peso2").val();
  const $tos = $("#tos2").prop('checked') ? 1 : 0;
  const $fiebre = $("#fiebre2").prop('checked') ? 1 : 0;
  const $disnea = $("#disnea2").prop('checked') ? 1 : 0;
  const $dolormuscular = $("#dolormuscular2").prop('checked') ? 1 : 0;
  const $gripe = $("#gripe2").prop('checked') ? 1 : 0;
  const $presionalta = $("#presionalta2").prop('checked') ? 1 : 0;
  const $fatiga = $("#fatiga2").prop('checked') ? 1 : 0;
  const $garraspera = $("#garraspera2").prop('checked') ? 1 : 0;

  let datos = {
      id: $id,
      nombre: $nombre,
      edad: $edad,
      talla: $talla,
      peso: $peso,
      tos: $tos,
      fiebre: $fiebre,
      disnea: $disnea,
      dolormuscular: $dolormuscular,
      gripe: $gripe,
      presionalta: $presionalta,
      fatiga: $fatiga,
      garraspera: $garraspera
  };

  $.ajax({
      url: "26.1-update-ajax-pdo.php",
      type: "post",
      data: datos,
      success: function(result) {
          alert("Se guardaron los datos correctamente: " + result);
          $('#exampleModal').modal('hide'); // Cerrar el modal después de guardar los datos
          location.reload(); // Recargar la página para reflejar los cambios
      },
      error: function(xhr, status, error) {
          alert("Error al guardar los datos: " + error);
      }
  });

  return;
}



/////////////////////////////////////////////////////
 
function cancelar() {
    $('#exampleModal').modal('hide');    
}

/////////////////////////////////////////
function agregarFilas(id, paciente) {
  const html =
    `<tr>
       <td>${paciente.id}</td>
       <td>${paciente.nombres}</td>
       <td>${paciente.edad}</td>
       <td>${paciente.talla_m}</td>
       <td>${paciente.peso_kg}</td>
       <td>${paciente.sintoma_tos}</td>
       <td>${paciente.sintoma_fiebre}</td>
       <td>${paciente.sintoma_disnea}</td>
       <td>${paciente.sintoma_dolormuscular}</td>
       <td>${paciente.sintoma_gripe}</td>
       <td>${paciente.sintoma_presionalta}</td>
       <td>${paciente.sintoma_fatiga}</td>
       <td>${paciente.sintoma_garraspera}</td>
       <td><button type='button' onclick="editar('${paciente.id}', '${paciente.nombres}', '${paciente.edad}', '${paciente.talla_m}', '${paciente.peso_kg}', '${paciente.sintoma_tos}', '${paciente.sintoma_fiebre}', '${paciente.sintoma_disnea}', '${paciente.sintoma_dolormuscular}', '${paciente.sintoma_gripe}', '${paciente.sintoma_presionalta}', '${paciente.sintoma_fatiga}', '${paciente.sintoma_garraspera}');">Editar</button></td>
     </tr>`;
  $(id + " tr:last").after(html);
}

////////////////////////////////////////
 
function editar(id, nombres, edad, talla, peso, tos, fiebre, disnea, dolormuscular, gripe, presionalta, fatiga, garraspera) {
  $('#exampleModal').modal('show');    
  $("#id2").val(id);
  $("#nombre2").val(nombres);
  $("#edad2").val(edad);
  $("#talla2").val(talla);
  $("#peso2").val(peso);

  $('#tos2').prop('checked', tos == 1);
  $('#fiebre2').prop('checked', fiebre == 1);
  $('#disnea2').prop('checked', disnea == 1);
  $('#dolormuscular2').prop('checked', dolormuscular == 1);
  $('#gripe2').prop('checked', gripe == 1);
  $('#presionalta2').prop('checked', presionalta == 1);
  $('#fatiga2').prop('checked', fatiga == 1);
  $('#garraspera2').prop('checked', garraspera == 1);
}



/////////////////////////
$(document).ready(function() {

    $('#exampleModal').on('hidden.bs.modal', function () {
    
    // Limpiar todos los campos del formulario
    
    $(this).find('input[type="text"]').val('');
    
    $(this).find('input[type="number"]').val('');
    
    $(this).find('input[type="checkbox"]').prop('checked', false);
    
    });
    
    });


    /////////////////////

    
