<?php

$id = "";
if (isset($_GET['var1'])) {
    $id = $_GET['var1'];
    echo "Estas en la pagina de usuario y tu id es: " . $id . "<br>";

} else {
    echo "No se han recibido las variables correctamente.";
}
?>

<form action="./perfilUsuarioVista.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit">Perfil de Usuario</button>
</form>