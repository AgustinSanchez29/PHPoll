<?php
include("conexion.php");
include("includes/header.php");

if(isset($_POST["enviar"])){
    //AQUI INSERTAMOS LA PREGUNTA EN LA BASE DE DATOS
    $pregunta=$_POST["pregunta"];
    $query="INSERT INTO preguntas(descripcion) VALUES
    ('$pregunta')";
    $res= mysqli_query($con,$query);
    if(!$res){
        die("ERROR-->query fail");
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
    for($i=0;$i<sizeof($_REQUEST["respuesta"]);$i++){
        $valorTemp= $_REQUEST["respuesta"][$i+1];
        $query3= "INSERT INTO respuestas(descripcion,id_preguntas) VALUES
        ('$valorTemp', $aux)";
        $res= mysqli_query($con,$query3);
        if(!$res){
            die("ERROR-->query fail");
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
