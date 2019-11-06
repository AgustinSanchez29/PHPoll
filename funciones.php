<?php
include("conexion.php");




    $sexo=$_POST["sexo"];
    $edad=$_POST["edad"];
    $salario=$_POST["salario"];
    $provincia=$_POST["provincia"];

    $query="INSERT INTO encuesta(sexo,provincia,salario,edad) VALUES('$sexo','$provincia','$salario','$edad')";
    $res=mysqli_query($con,$query);
    if(!$res)
    {
        die("ERROR-->query failAl introducir la pregunta");
    }
    header("location:preguntas.php")





?>