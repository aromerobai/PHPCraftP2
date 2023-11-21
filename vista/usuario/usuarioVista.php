<?php

$id = "";
$username = "";
$password = "";
$email = "";

if (isset($_GET['id_usuario']) && isset($_GET['username']) && isset($_GET['password']) && isset($_GET['email'])) {
    $id = $_GET['id_usuario'];
    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];
} else {
    echo "No se han recibido las variables correctamente.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calendario con Bootstrap</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/usuarioVista.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="jumbotron mt-3 text-center">
            <h1 class="display-4">Calendario de <?php echo $username; ?></h1>
            <p class="lead">Correo electrónico: <?php echo $email; ?></p>
            <form action="./perfilUsuarioVista.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="username" value="<?php echo $username; ?>">
                <input type="hidden" name="password" value="<?php echo $password; ?>">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <button type="submit">Perfil de Usuario</button>
            </form>
            <div class="text-center mt-4">
            <button class="btn btn-primary mr-2" onclick="window.location.href='usuarioVista.php?view=mes&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Mes</button>
            <button class="btn btn-primary mr-2" onclick="window.location.href='usuarioVista.php?view=semana&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Semana</button>
            <button class="btn btn-primary" onclick="window.location.href='usuarioVista.php?view=dia&id_usuario=<?php echo $id; ?>&username=<?php echo $username; ?>&password=<?php echo $password; ?>&email=<?php echo $email; ?>'">Día</button>   

            <div>
        </div>
        <div class="view">
            <!-- Contenido de las tablas (mes, semana y día) se mostrará aquí según se haga clic en los botones -->
        </div>
        
        <?php 
        if(isset($_GET['view'])) {
            $view = $_GET['view'];
        
            if ($view === 'mes') {
                echo "<div class='calendar mt-5'>";
                // Obtener el mes actual y el año
                $month = date('n');
                $year = date('Y');
    
                // Nombres de los meses y días de la semana
                $monthNames = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                $dayOfWeek = array('Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom');
    
                // Obtener el primer día del mes
                $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);
    
                // Obtener el número de días en el mes
                $numberDays = date('t', $firstDayOfMonth);
    
                // Obtener el día de la semana del primer día del mes
                $dayOfWeekIndex = date('w', $firstDayOfMonth);
    
                // Crear el encabezado del calendario
                echo "<h2 class='text-center mb-4'>{$monthNames[$month - 1]} $year</h2>";
                echo "<table class='table table-bordered'>";
                echo "<tr>";
                foreach ($dayOfWeek as $day) {
                    echo "<th scope='col'>$day</th>";
                }
                echo "</tr>";
    
                echo "<tr>";
    
                // Rellenar los espacios en blanco hasta el primer día del mes
                for ($i = 0; $i < $dayOfWeekIndex; $i++) {
                    echo "<td></td>";
                }
    
                // Mostrar los días del mes
                for ($day = 1; $day <= $numberDays; $day++, $dayOfWeekIndex++) {
                    if ($dayOfWeekIndex % 7 == 0) {
                        echo "</tr><tr>";
                    }
                    echo "<td>$day</td>";
                }
    
                // Rellenar los espacios restantes hasta el final de la semana
                while ($dayOfWeekIndex % 7 != 0) {
                    echo "<td></td>";
                    $dayOfWeekIndex++;
                }
    
                echo "</tr></table>";
                echo "</div>";
                echo "</div>";

            } elseif ($view === 'semana') {

                echo "<div class='week row no-gutters'>";
                    $currentDate = date('Y-m-d'); // Obtener la fecha actual
                    
                    for ($i = 0; $i <= 6; $i++) {
                        $day = date('Y-m-d', strtotime("+$i days", strtotime($currentDate))); // Utilizar $currentDate para obtener los días de la semana
                        echo "<div class='col-lg-auto day mt-3'>"; // Agregar la clase mt-3 para el margen superior
                        echo "<h4 class='mb-3 p-2'>$day</h4>";
                        
                        echo "<table class='table table-bordered'>";
                        echo "<tbody>";
                        for ($hour = 9; $hour <= 21; $hour++) {
                            echo "<tr>";
                            echo "<td>$hour:00</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                        echo "</table>";
                        echo "</div>";
                    }
                echo "</div>";

            } elseif ($view === 'dia') {

                echo "<div class='container'>";
                echo "<h2>Horario para el día actual</h2>";
                echo "<table class='table table-bordered'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Hora</th>";
                echo "<th>Actividad</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
        
                date_default_timezone_set('Europe/Madrid'); // Establecer la zona horaria de Madrid
                $currentDate = date('Y-m-d'); // Obtener la fecha actual
                
                for ($hour = 9; $hour <= 21; $hour++) {
                    $currentDateTime = $currentDate . " " . str_pad($hour, 2, "0", STR_PAD_LEFT) . ":00:00";
                    
                    echo "<tr>";
                    echo "<td>" . date('H:00', strtotime($currentDateTime)) . "</td>";
                    echo "<td>Actividad a las " . date('H:00', strtotime($currentDateTime)) . "</td>";
                    echo "</tr>";
                }

                echo"</tbody>";
                echo"</table>";
                echo "</div>";
            }
        }
        ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
