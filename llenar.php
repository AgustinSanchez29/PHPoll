<?php
include("includes/header.php");
include("conexion.php");
$pregunta=$_POST["pregunta"];
$tipo=$_POST["tipo"];var_dump($tipo);?>

<br><br>
<div class="container">
    
<div class="card card-body">
                <form action="guardar.php" method="POST">
                <label for="datos">Estos son tus datos</label>
                    <div class="form-group">
                    <label for="pregunta">Pregunta:</label>
                        <input type="text" name="pregunta" class="form-control"  value="<?php echo $pregunta;?>">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo de pregunta:</label>
                        <input type="text" name="tipo" class="form-control"  value="<?php echo $tipo;?>">
                    </div>
                    <label for="tipo">Respuestas:</label>
                    <?php 
                    if($tipo=="checkbox" || $tipo=="radio"){
                        
                        for($i=1;$i<=4;$i++)
                        {?>
                            <div class="form-group">
                            <input type="text" name="respuesta[<?php echo $i?>]" placeholder="respuesta<?php echo $i?>" class="form-control">
                            </div>
                    <?php }
                    }
                    else{ ?>
                        <div class="form-group">
                            <input type="text" name="si" value="si" class="form-control">
                            <input type="text" name="no" value="no" class="form-control">
                        </div>
                    <?php }
                    ?>
                    
                    <input type="submit" class="btn btn-success btn-block" name="enviar" value="enviar">
                </form>
</div>


</div>



<?php include("includes/footer.php");?>