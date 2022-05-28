<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Página de registro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">               
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded"> 
                    <div class="Rform">                                   
                      <div class="p-3 mb-2 bg-primary bg-gradient fw-bold text-white">Formulario de registro</div>
                    </div>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre"  required>
                            <!-- Mensajes para validación   -->
                            <div class="valid-tooltip">¡Campo válido!</div>
                            <div class="invalid-tooltip">Debe completar los datos.</div>
                        </div>
                        <div class="col-md-4 position-relative">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" required>
                            <!-- Mensajes para validación   -->
                            <div class="valid-tooltip">¡Campo válido!</div>
                            <div class="invalid-tooltip">Debe completar los datos.</div>
                        </div>   
                        <div class="col-md-4 position-relative">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" value="" required>
                            <span toggle="#password-3" class="mdi mdi-eye-outline toggle-password"></span>
                            <!-- Mensajes para validación   -->
                            <div class="valid-tooltip">¡Campo válido!</div>
                            <div class="invalid-tooltip">Debe completar los datos.</div>
                        </div>                                          
                        <div class="col-md-3 position-relative">
                            <label for="pais" class="form-label">Ciudad</label>
                            <select class="form-select" id="pais" required>
                                <option selected disabled value="">Seleccione...</option>
                                <option>Madrid</option>
                                <option>Barcelona</option>
                                <option>Torrejon de ardoz</option>
                                <option>Villaverde City</option>
                                <option>Valencia</option>
                            </select>
                            <!-- Mensajes para validación   -->
                            <div class="valid-tooltip">¡Campo válido!</div>
                            <div class="invalid-tooltip">Debe completar los datos.</div>
                        </div>    
                                       
                        <div class="col-12">
                        <button class="btn btn-primary fw-bold float-end" type="submit">Enviar</button>
                        </div>
                    </form>
                    <a href="welcome" class="boton">
                      Volver a la página principal
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>        
(function () {
  'use strict'

  // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
  var forms = document.querySelectorAll('.needs-validation')

  //Recorremos los forms y evitamos en envío sin validacion
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
    </script>    
  </body>
</html>