<?php
$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
?>

</br></br>
Modificar nombre de usuario y contraseña
<form action="../../controlador/perfilUsuarioControlador.php" method="post">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" class="form-control" required>
        </div>
        <input type="hidden" name="id_usuario" value="<?php echo $id; ?>">
        <button type="submit" name="loginUsuario" class="btn btn-primary btn-block">Iniciar sesión</button>
    </form>
</div>    

