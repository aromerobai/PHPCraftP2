<?php

function createInscripcion($Id_inscripcion, $Id_persona, $id_acto, $Fecha_inscripcion) {
    
    $consulta = "INSERT INTO eventos.Inscritos (Id_inscripcion, Id_persona, id_acto, Fecha_inscripcion)
     VALUES ('$Id_inscripcion', '$Id_persona', '$id_acto', STR_TO_DATE('$Fecha_inscripcion', '%d-%m-%Y'))";

    connection::ejecutar_consulta($consulta);
    
}