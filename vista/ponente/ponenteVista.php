<?php
if (isset($_GET['var1'])) {
    $var1 = $_GET['var1'];
    echo "Estas en la pagina de ponente y tu id es: " . $var1 . "<br>";

} else {
    echo "No se han recibido las variables correctamente.";
}
?>