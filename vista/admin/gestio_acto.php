<!-- gestio_acto.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribify | Configurar-Evento</title>
    
    <!-- Incluir Bootstrap desde tu carpeta local -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Incluir tu archivo de estilos personalizado -->
    <link rel="stylesheet" href="../css/crear_acto.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-register">Configurar Evento</h1>
                        
                        <!-- Botón para mostrar la lista de eventos -->
                        <form method="post">
                            <button type="submit" name="verEventos" class="btn btn-primary">Ver Eventos</button>
                        </form>
                        
                        <!-- Lista de eventos -->
                        <div class="eventos-container">
                            <?php
                            // Aquí debes realizar la conexión a tu base de datos y recuperar los eventos
                            // Ejemplo de cómo mostrar una lista estática, reemplaza esto con tu lógica PHP
                            if (isset($_POST['verEventos'])) {
                                // Conexión a la base de datos y consulta de eventos
                                // Supongamos que tienes una variable $eventos que contiene los eventos recuperados de la base de datos
                                $eventos = [
                                    "Evento 1",
                                    "Evento 2",
                                    "Evento 3"
                                ];

                                // Mostrar la lista de eventos
                                echo '<ul>';
                                foreach ($eventos as $evento) {
                                    echo "<li>$evento</li>";
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>