<!-- registro.php -->
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Usuario</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../vista/css/registro.css">
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-register">Registro</h1>

                            <!-- Formulario de registro -->
                            <form class="border p-3" action="./registro.php" method="post">
                                <div class="form-group">
                                    <label for="Username">Nombre de usuario</label>
                                    <input type="text" name="Username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Contraseña</label>
                                    <input type="password" name="Password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Id_Persona">Id_Persona</label>
                                    <input type="text" name="Id_Persona" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Id_tipo_usuario">Id_tipo_usuario</label>
                                    <input type="text" name="Id_tipo_usuario" class="form-control" required>
                                </div>
                                <button type="submit" name="createUsuario" class="btn btn-primary btn-block">Crear Usuario</button>

                                <!-- Espacio para mostrar el mensaje -->
                                <?php 
                                include ("../controlador/registroControlador.php");
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
                                    $mensaje = registro();
                                    
                                    if ($mensaje == 'Error en el registro!'){
                                        echo "<p style='color:red; margin-top:15px'>{$mensaje}</p>";
                                    } else {
                                    // Redirección a la página de inicio
                                    echo '<meta http-equiv="refresh" content="0;url=../index.php">';
                                    exit();
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>