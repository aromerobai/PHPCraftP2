<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>

<?php
include('modelo/connection.php');

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["boton"])) {
        $mensaje = connection::ejecutar_consulta_simple("SELECT * FROM eventos.Personas");
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                echo "Nombre: " . $fila['Nombre'] . "<br>";
            }
        } else {
            echo "Error en la consulta";
        }
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="boton" value="Llamar a la función">
</form>

</body>
</html>