<?php


function deleteInscripcion($Id_inscripcion) {
 
    $consulta = "DELETE FROM eventos.Inscritos WHERE Id_inscripcion = '$Id_inscripcion'";

    connection::ejecutar_consulta($consulta);

}