<!-- menuAdministrador.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Panel-Administrador</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="vista/css/admin.css">
</head>

<body>
    <div class="container text-center">
        <h1>Panel de Administración</h1>

        <div class="buttons-container mt-7">
            <a href="?section=crear_acto" class="btn btn-primary button crear-evento mx-2">Crear Evento</a>
            <a href="?section=gestionar_ponentes" class="btn btn-secondary button configurar-evento mx-2">Configurar Evento</a>
        </div>

        <!-- Contenido dinámico basado en la sección seleccionada -->
        <?php
        // Verifica la sección seleccionada en la URL
        $section = isset($_GET['section']) ? $_GET['section'] : '';

        // Carga el contenido de la sección correspondiente
        switch ($section) {
            case 'crear_acto':
                include('crear_acto.php');
                break;
            case 'gestionar_ponentes':
                include('gestionar_ponentes.php');
                break;
            // Agrega más casos según las secciones que necesites
        }
        ?>
    </div>
</body>

</html>