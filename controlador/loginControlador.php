<!-- loginControlador -->
<?php
include('../modelo/Usuarios/read.php');
include('../modelo/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["loginUsuario"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        $username = "";
        $mensaje = existeUsuario($usuario, $contrasena);
        
        if ($mensaje) {
            while ($fila = $mensaje->fetch(PDO::FETCH_ASSOC)) {
                $username = $fila['Username'];
                $id_usuario = $fila['Id_usuario'];
                $id_tipo_usuario = $fila['Id_tipo_usuario'];

                if ($id_tipo_usuario == 1) {
                    echo "<script>window.location.href='../vista/usuario/usuarioVista.php?var1=" . urlencode($id_tipo_usuario) . "';</script>";
                    exit(); 
                } elseif ($id_tipo_usuario == 2) {
                    echo "<script>window.location.href='../vista/ponente/ponenteVista.php?var1=" . urlencode($id_tipo_usuario) . "';</script>";
                    exit(); 
                } elseif ($id_tipo_usuario == 3) {
                    echo "Es de tipo administrador";
                    // Aquí hay que decidir que se hace con el Administrador
                }
            }

            if ($username != $usuario) {
                echo "No existe el usuario\n";
            }
        } else {
            echo "Error en la consulta\n";
        }
    }
}
?>
