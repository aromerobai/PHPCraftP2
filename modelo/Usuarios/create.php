<?php

function createUsuario($Username,$Password,$Id_Persona,$Id_tipo_usuario) {
    
   try{ 
        $consulta = "INSERT INTO eventos.Usuarios (Username,Password,Id_Persona,Id_tipo_usuario) 
        VALUES ('$Username', '$Password', '$Id_Persona', '$Id_tipo_usuario')";

        $resultado = connection::ejecutar_consulta($consulta);
    }catch (PDOException $e) {
        // Captura la excepción de la base de datos
        // Puedes manejarla o lanzarla nuevamente si es necesario
        return 'Error en el registro!';
    }
}