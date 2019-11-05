<?php
include("conexion.php");
$id=$_POST["idpreguntas"];
if($_POST["editar"]){
    $pregunta=$_POST["pregunta"];
    $query="UPDATE preguntas set descripcion='$pregunta' where id_preguntas='$id'";
    $res=mysqli_query($con,$query);
    if(!$res){
        die("ERROR-->query fail resp");
    }   
    for($i=0;$i<sizeof($_REQUEST["descripcion"]);$i++){
        $tempId= $_REQUEST["idResp"][$i+1];
        $tempDes= $_REQUEST["descripcion"][$i+1];
        $query2= "UPDATE respuestas set descripcion='$tempDes' where id_respuestas='$tempId'";
        $res2= mysqli_query($con,$query2);
        if(!$res2){
            die("ERROR-->query fail");
        }   
    }

}

elseif($_POST["eliminar"]){
    $query= "DELETE FROM preguntas WHERE id_preguntas= $id";
    $res=mysqli_query($con,$query);
    if(!$res){
        die("query failed");
    }
}
header("location:admin.php");















?>