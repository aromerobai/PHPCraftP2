<?php


function readUsuario($Id_usuario) {
 
    $mensaje = connection::ejecutar_consulta("SELECT * FROM eventos.Usuarios WHERE Id_usuario='$Id_usuario'");

    return $mensaje;
}
