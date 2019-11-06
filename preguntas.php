<?php include("includes/header.php");?>
<?php include("conexion.php");?>


<div class="container">
<h3>Preguntas de la Encuesta</h3>
    <div class="row">
        <div class="col-md-6">
        <?php

            //ESTA PARTE IMPRIME LAS PREGUNTAS CON SUS RESPECTIVAS RESPUESTAS EN ORDEN ALEATORIO
            $query="SELECT * from preguntas ORDER BY rand() limit 10";
            $result=mysqli_query($con,$query);
            while($resp=mysqli_fetch_array($result)){
                echo "<hr>".$resp["descripcion"]."<br><br>";
                $id=$resp['id_preguntas'];
                $type=$resp['tipoPregunta'];
                if($type=="binaria")
                {
                    $type="radio";
                }
                
                $query2="SELECT descripcion FROM respuestas WHERE id_preguntas=$id";
                $result2=mysqli_query($con,$query2);
                while($resp2=mysqli_fetch_array($result2)){
                    $respuesta= $resp2["descripcion"]; ?>
                    <input type="<?php echo $type?>" name="respuesta" value="<?php echo $respuesta;?>"><?php echo $respuesta?><br>
               <?php }}?>
               <br><hr>
               <a href="index.php" class="btn btn-info btn-block">Send</a>
               <br>
        </div>
    </div>
</div>







<?php include("includes/footer.php");?>