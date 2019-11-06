<?php
include("conexion.php");
include("includes/header.php");

if(isset($_POST["enviar"])){
    //AQUI INSERTAMOS LA PREGUNTA EN LA BASE DE DATOS
    $pregunta=$_POST["pregunta"];
    $tipo=$_POST["tipo"];
    $idEncuesta= rand(1,5);
    $query="INSERT INTO preguntas(descripcion,tipoPregunta,id_encuesta) VALUES('$pregunta','$tipo','$idEncuesta')";
    $res= mysqli_query($con,$query);
    if(!$res){
        die("ERROR-->query failAl introducir la pregunta");
    }

    //ESTE PASO RECUPERA EL ID DE LA ULTIMA PREGUNTA INTRODUCIDA EN LA BASE DE DATOS
    $query2= "SELECT id_preguntas FROM preguntas order by id_preguntas desc limit 1";
    $res2= mysqli_query($con,$query2);
    while($val= mysqli_fetch_array($res2))
    {
        var_dump($val);
        $aux= $val["id_preguntas"];
        echo "<br>".$aux;
    }

    //AQUI GUARDAMOS LAS RESPUESTAS CON SU SU LLAVE FORANEA QUE SERIA LA DE LA ULTIMA PREGUNTA INTRODUCIDA 
    //$aux CONTIENE EL ID DE LA PREGUNTA Y $valorTemp VA GUARDANDO LA RESPUESTA TEMPORALMENTE
    if(isset($_POST["si"])){
        $si=$_POST["si"];
        $no=$_POST["no"];
        $query3= "INSERT INTO respuestas(descripcion,id_preguntas) VALUES
        ('$si', $aux),('$no',$aux)";
        $res= mysqli_query($con,$query3);
        if(!$res){
            die("ERROR-->query failRespuesta");
        }   
    }
    else{
        for($i=0;$i<sizeof($_REQUEST["respuesta"]);$i++){
            $valorTemp= $_REQUEST["respuesta"][$i+1];
            $query3= "INSERT INTO respuestas(descripcion,id_preguntas) VALUES
            ('$valorTemp', $aux)";
            $res= mysqli_query($con,$query3);
            if(!$res){
                die("ERROR-->query failRespuesta");
            }   
        }

    }

    
}
header("location:admin.php");



















// if(isset($_POST["enviar"])){
//     $pregunta=$_POST["pregunta"];
//     $query="INSERT INTO preguntas(descripcion) VALUES
//     ('$pregunta')";

//     for($i=0;$i<sizeof($_REQUEST["respuesta"]);$i++){
//         $arr[$i]=$_REQUEST["respuesta"][$i+1];
//     }




// }



include("includes/footer.php");
