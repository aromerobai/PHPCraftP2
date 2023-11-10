<?php

function createActo($Id_acto,$Fecha,$Hora,$Titulo,$Descripcion_corta,$Descripcion_larga,$Num_asistentes,$Id_tipo_acto) {
    
    $consulta = "INSERT INTO eventos.Actos (Id_acto, Fecha, Hora, Titulo, Descripcion_corta, Descripcion_larga, Num_asistentes, Id_tipo_acto) 
    VALUES ('$Id_acto', STR_TO_DATE('$Fecha', '%d-%m-%Y'), '$Hora', '$Titulo', '$Descripcion_corta', '$Descripcion_larga', '$Num_asistentes', '$Id_tipo_acto')";    

    connection::ejecutar_consulta($consulta);
    
}