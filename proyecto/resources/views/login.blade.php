<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de inicio de sesión</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
<style>

    body{
       background: #59a9ff;

       background: linear-gradient(to right,#f0f0f0, #59a9ff);
    }
    .bg{
        background-image: url(imagenes/login3.jpg);
        background-position: center center ;
    }
</style>
<!--linear gradient para dar degradado-->
</head>
<body>
<div class="container w-75 bg-primary mt-5 mb-5 rounded shadow">
    <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

        </div>

        <div class="col bg-white p-5 rounded-end">
            <div class="text-end">
            <img src="imagenes/libreria1.png" width="48" alt="logo">
        </div>
        <h2 class="fw-bold text-center py-5">Bienvenido</h2>
        <!--login-->
        <form action="#">
            <div class="mb-4">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" name="email">
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="pasword">
            </div>

            <div class="login-checkbox-forget d-sm-flex justify-content-between align-items-center">

                <a class="forget" href="#">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="form-check form-switch">
                </br>
                <input class="form-check-input" id="recordarme" type="checkbox" name="recordarme" />
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" name="connected"  class="form-check-input">
                <label for="connected" class="form-check-label"> Mantenerme conectado</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </div>

            <div class="my-3"></div>
            <span>¿No tienes una cuenta todavía? <a href="registro">Regístrate</a></span><br>
            <span><a href="500.html">Recuperar contraseña</a></span>
        </form>
            <!--login con redes sociales-->
            <br>
            <a href="welcome" class="boton">
                Volver a la página principal
            </a>
    </div>
</div>
</div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
