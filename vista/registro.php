<!-- registro.php -->
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Usuario</title>
        <link rel="stylesheet" href="vista/css/styles.css">
    </head>

    <body>
        <h1>Registro</h1>

        <?php 
            
            //Verifica si el formulario se ha enviado correctamente
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                // Logica para processar el formulario y registrar en la BBDD

                $mensaje = "El registro ha sido un éxito";
            } else {
                $mensaje = "";
            }
        ?>

        <?php
            if (!empty($mensaje)) {
                echo "<p>$mensaje</p>";
            }
        ?>

        <!-- Formulario de registro -->
        <form action="index.php?action=procesarRegistro" method="post">
            <!-- Campo de usuario -->
            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" required><br><br>

            <!-- Campo de contraseña -->
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required><br><br>

            <!-- Botón de envío del formulario -->
            <button type="submit">Registrar</button>
        </form>

    </body>
</html>