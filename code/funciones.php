<?php
include("conexion.php");

function resolver($idPregunta){
    $query= "SELECT descripcion from respuestas WHERE id_pregunta= $idPregunta";
    $respuestas= mysqli_fecth_assoc();
    

}



?>