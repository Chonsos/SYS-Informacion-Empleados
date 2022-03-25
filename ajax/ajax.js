
// Funcion para verificar existencia de un nombre de usuario

var camposName = document.querySelectorAll('.usernameValidation');
var camposEmail = document.querySelectorAll('.emailValidation');

for (let campoName of camposName) {
  if (campoName.classList.contains('usernameValidation')) {
    campoName.onchange = function () {
      var nombre = campoName.value;
      var datos = new FormData();
      datos.append("nombre", nombre);

      $.ajax({
        url: "ajax/ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,

        before: function () {

        },
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            campoName.value = "";
            campoName.select();
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.error('El nombre ya existe');
          } else {
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.success('Puedes usar este nombre');
          }
        },
        error: function (err) {
          console.log("Ocurrio un error: " + err);
        },
        complete: function () {

        }
      });
    }
  }
}

// Funcion para verificar existencia de un email

for (let campoEmail of camposEmail) {
  if (campoEmail.classList.contains('emailValidation')) {
    campoEmail.onchange = function () {
      var email = campoEmail.value;
      var datos = new FormData();
      datos.append("email", email);

      $.ajax({
        url: "ajax/ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,

        before: function () {

        },
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == 1) {
            campoEmail.value = "";
            campoEmail.select();
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.error('El email ya existe');
          } else {
            alertify.set('notifier', 'position', 'bottom-left');
            alertify.success('Puedes usar este email');
          }
        },
        error: function (err) {
          console.log("Ocurrio un error: " + err);
        },
        complete: function () {

        }
      });
    }
  }
}

// Funcion para subir el archivo
function subir_archivo() {
  var input_file = $("#archivo")[0];
  var file = input_file.files[0];

  if ((typeof file === "object") && (file != null)) {

    var dataa = new FormData();
    dataa.append("file", file);

    if ((typeof file === "object") && (file != null)) {

      var dataa = new FormData();
      dataa.append("file", file);


      $.ajax({
        url: "ajax/ajax.php",
        method: "POST",
        data: dataa,
        cache: false,
        contentType: false,
        processData: false,

        before: function () {
          console.log("Subiendo Archivo");
        },
        success: function (respuesta) {
          console.log(respuesta);
          if (respuesta == "300") {
            console.log("Archivo no permitido");
          } else if (respuesta == "301") {
            console.log("Archivo muy grande")
          } else if (respuesta == "302") {
            console.log("Fallo subir el archivo")
          } else if (respuesta == "303") {
            console.log("Archivo Vacio")
          } else {

          }
        },
        error: function (err) {
          console.log("Ocurrio un error: " + err);
        },
        complete: function () {
          console.log("Archivo Subido")
        }
      });
    }
  }
}

// Ajax para el buscador

$(document).ready(function () {
  $('#buscar').focus(); // Enfoco inmediatamente al input 
  $('.form').hide();

  $('#buscar').on('keyup', function () {
    if ($('#buscar').val()) {
      var search = $('#buscar').val();
      // console.log(search);
      $.ajax({
        url: 'ajax/ajax.php',
        type: 'POST',
        dataType: 'json', // Con esto hago la connversion JSON esto es igual a decir JSON.parse(respuesta)
        data: { search },
        success: function (respuesta) {
          let empleados = respuesta; // Gracias al dataType: json, simplemente guardo el parametro que necesito
          let vista = '';
          empleados.forEach(empleado => {
            vista += `
          
                            <h6>Nombre: ${empleado.nombre} </h6>
                            <h6>Apellidos: ${empleado.apellidos} </h6>
                            <h6>Familiares:  ${empleado.familiares}  </h6>
                            <h6>Telefonos:  ${empleado.telefonos}  </h6>
                            <h6>Vacaciones:  ${empleado.vacaciones + " "} dias  </h6>
                            <h6>Perfil_Academico:  ${empleado.perfilAcademico}  </h6>
                            <h6>Fecha de Ingreso:  ${empleado.fechaIngreso}  </h6>
                            <h6>Vacunas:  ${empleado.vacunas}  </h6>
                            <h6>Cedula:  ${empleado.cedula}  </h6>
                            <h6>Licencias:  ${empleado.licencias}  </h6>
          <p class="bordeAbajo"></p>
          `;
          })

          $('#resultado').html(vista); // Incluyo esa vista en un div con #resultado
          $('.formm').hide();
          $('.form').show();
        }
      })
    } else {
      $('.form').hide();
      $('.formm').show();
    }
  })
})