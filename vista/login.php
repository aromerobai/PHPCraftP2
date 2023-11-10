<!-- login.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Configuración del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 

    <!-- Incluir Bootstrap desde la CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="vista/css/login.css">
</head>

<body>

    <div class="container">
        <div class="card mx-auto" >
            <div class="card-body">
                <h1 class="text-center">Login</h1>

                <?php
                // Muestra mensajes de éxito o error si existe la variable $mensaje
                if (isset($mensaje)) {
                    echo "<div class='alert alert-danger'>$mensaje</div>";
                }
                ?>

                <!-- Formulario de inicio de sesión -->
                <form action="index.php?action=procesarLogin" method="post">
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>