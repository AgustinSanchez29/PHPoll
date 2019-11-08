<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encuestas";

 $con= mysqli_connect(  $servername,$username, $password,$dbname );


function entrar(){
    $sexo=$_POST["sexo"];
    $edad=$_POST["edad"];
    $salario=$_POST["salario"];
    $provincia=$_POST["provincia"];

    $query="INSERT INTO encuesta(sexo,provincia,salario,edad) VALUES('$sexo','$provincia','$salario','$edad')";
    $res= mysqli_query ($GLOBALS["con"] ,$query);
    if(!$res)
    {
        die("ERROR-->query failAl introducir la pregunta");
    }
    header("location:preguntas.php");
}


  


      function generoMasculino(){
        
        $query = "SELECT count(*) as total FROM encuesta  WHERE sexo = 'm' ";
        $res = mysqli_query($GLOBALS["con"] ,$query);
        
          if (mysqli_num_rows($res) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($res)) {
              if ( isset($row["total"]) ) {
                
                echo $row['total'];
              }
              else {
                
                echo  0;
              }
                
            }
        }
        

      }


      function generoFemenino(){
        
        $query = "SELECT count(*) as total FROM encuesta  WHERE sexo = 'f' ";
        $res = mysqli_query($GLOBALS["con"] ,$query);
        
          if (mysqli_num_rows($res) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($res)) {
              if ( isset($row["total"]) ) {
                echo  $row['total'];
              } 
              else {
                echo  0;
              }
              
                
            }
        } 
        
       
      }
    
  


  

  function rangoEdad(){
    $query = "SELECT COUNT(*) as total FROM encuesta  WHERE edad BETWEEN 20 AND 30;";
    $res = mysqli_query($GLOBALS["con"] ,$query);
    
      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($res)) {
          if ( isset($row["total"]) ) {
            echo  $row['total'];
          }
          else {
          echo  0;
          }
            
        }
    } 



  }


  function capital(){
    $query = "SELECT COUNT(*) as total FROM encuesta WHERE LOWER(provincia) LIKE '%pan%'";
    $res = mysqli_query($GLOBALS["con"] ,$query);
    
      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($res)) {
          if ( isset($row["total"]) ) {
            echo  $row['total'];
          }
          else {
          echo  0;
          }
            
        }
    } 



  }


  function provincia(){
    $query = "SELECT COUNT(*) as total FROM encuesta WHERE LOWER(provincia) NOT LIKE '%pan%'";
    $res = mysqli_query($GLOBALS["con"] ,$query);
    
      if (mysqli_num_rows($res) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($res)) {
          if ( isset($row["total"]) ) {
            echo  $row['total'];
          }
          else {
          echo  0;
          }
            
        }
    } 



  }
  
  



?>