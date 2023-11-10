<!-- registroControlador -->
<?php

include('../modelo/Usuarios/create.php');
include('../modelo/connection.php');

function registro() {
    
    if (isset($_POST["createUsuario"])) {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];
        $Id_Persona  = $_POST["Id_Persona"];
        $Id_tipo_usuario  = $_POST["Id_tipo_usuario"];
        $registroExitoso = createUsuario($Username, $Password, $Id_Persona, $Id_tipo_usuario);

        return $registroExitoso;
    }
}
// Verifica si el formulario se ha enviado correctamente
?>