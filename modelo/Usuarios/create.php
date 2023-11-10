<?php

function createUsuario($Id_usuario, $Username,$Password,$Id_Persona,$Id_tipo_usuario) {
    
    $consulta = "INSERT INTO eventos.Usuarios (Id_usuario, Username,Password,Id_Persona,Id_tipo_usuario) 
    VALUES ('$Id_usuario', '$Username', '$Password', '$Id_Persona', '$Id_tipo_usuario')";

    connection::ejecutar_consulta($consulta);
    
}