<!-- menuAdministrador.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <!-- Incluye tus estilos y scripts necesarios -->
</head>

<body>
    <h1>Panel de Administración</h1>

    <!-- Aquí puedes agregar enlaces o botones para acceder a diferentes secciones del panel de administración -->
    <a href="?section=crear_acto">Crear Acto</a>
    <a href="?section=gestionar_ponentes">Gestionar Ponentes</a>
    <!-- Agrega más enlaces según las secciones que necesites -->

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
        default:
            // Muestra un mensaje por defecto o carga una sección principal
            echo 'Bienvenido al Panel de Administración';
            break;
    }
    ?>

</body>

</html>