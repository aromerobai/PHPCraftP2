<?php 

include('../modelo/Usuarios/update.php');
include('../modelo/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["id_usuario"])) {
        $id_usuario = $_POST["id_usuario"];
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        echo " Modificar este id:  " . $id_usuario . "<br>"; 
        updatePerfilUsuario($id_usuario,$usuario,$contrasena);     
    }
}
?>