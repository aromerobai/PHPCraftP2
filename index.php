<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="vista/css/style.css">
</head>

<body>

    <div class="container-inicio">
        <div class="row">
            <!-- Primera Columna - Nombre de la Aplicación e Imagen -->
            <div class="col-7 text-center columa-aplicacion">
                <h1 class="nombre-aplicacion">Inscribify</h1>
                <!-- <img src="ruta/de/la/imagen.jpg" alt="Imagen de la Aplicación" class="img-fluid"> -->
            </div>

            <!-- Segunda Columna - Botones de Logearse y Registrarse -->
            <div class="col-5 text-center columna-funciones">
                <h2 class="login-register">Accede a la aplicación</h2>
                <?php
                // Requiere el archivo del controlador
                require_once 'controlador/loginControlador.php';

                // Instancia del controlador
                $loginControlador = new LoginControlador();

                // Verificar si se ha hecho clic en un botón
                if (isset($_GET['action']) && $_GET['action'] == 'mostrarFormularioLogin') {
                    // Si se hace clic en "Log In", mostrar el formulario de inicio de sesión
                    $loginControlador->mostrarFormularioLogin();

                    // Si se hace clic en "Sing Up", mostrar el formulario de registro
                } elseif (isset($_GET['action']) && $_GET['action'] == 'mostrarFormularioRegistro') {
                    $loginControlador->mostrarFormularioRegistro();
                } else {
                    // Mostrar los botones por defecto
                    echo '<a class="btn btn-login" href="?action=mostrarFormularioLogin">Log In</a>';
                    echo '<a class="btn btn-register" href="?action=mostrarFormularioRegistro">Sign Up</a>';
                }

                /* 
                echo '<button class="btn btn-login"><a href="?action=mostrarFormularioLogin">Log In</a></button>';
                echo '<button class="btn btn-register"><a href="?action=mostrarFormularioRegistro">Sign Up</a></button>';
                echo '<a class="btn btn-login" href="?action=mostrarFormularioLogin">Log In</a>';
                echo '<a class="btn btn-register" href="?action=mostrarFormularioRegistro">Sign Up</a>';
                */
                ?>
            </div>
        </div>
    </div>
    
</body> 
</html>

