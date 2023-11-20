<?php

function readPersona($nombre ,$apellido1, $apellido2) {
 
    try {
        $consulta = "SELECT * FROM eventos.Personas WHERE Nombre='$nombre' AND Apellido1='$apellido1' AND Apellido2='$apellido2'";
        $resultado = connection::ejecutar_consulta($consulta);
        return $resultado; 
    } catch (PDOException $e) {
        return null; 
    }
}

function readPersonaNombre($nombre) {
 
    try {
        $consulta = "SELECT * FROM eventos.Personas WHERE Nombre='$nombre'";
        $resultado = connection::ejecutar_consulta($consulta);
        return $resultado; 
    } catch (PDOException $e) {
        return null; 
    }
}