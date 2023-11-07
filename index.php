<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de botón que llama a una función en PHP</title>
</head>
<body>

<?php
// Incluye el archivo que contiene la función
include('modelos/mainModel.php');

// Inicializa la variable para almacenar el resultado
$mensaje = "";

// Comprueba si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el botón con name "boton" ha sido presionado
    if (isset($_POST["boton"])) {
        // Obtiene el valor del parámetro del campo de entrada con name "parametro"
        $parametro = $_POST["parametro"];
        // Llama a la función del archivo incluido y almacena el resultado
        $mensaje = Modelo::ejecutar_consulta_simple("SELECT * FROM Personas");
    }
}
?>

<!-- Formulario con un botón y un campo de entrada para el parámetro -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="parametro" placeholder="Introduce un parámetro">
    <input type="submit" name="boton" value="Llamar a la función">
</form>

<!-- Muestra el resultado de la función después de llamarla -->
<?php
echo $mensaje;
?>

</body>
</html>