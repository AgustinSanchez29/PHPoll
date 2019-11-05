<?php
include("includes/header.php");
include("conexion.php");
$respuestas=$_POST["respuestas"];?>
<br><br>
<div class="container">
    
<div class="card card-body">
                <form action="guardar.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="pregunta" class="form-control" placeholder="Pregunta">
                    </div>
                    <?php for($i=1;$i<=$respuestas;$i++)
                    {?>
                        <div class="form-group">
                        <input type="text" name="respuesta[<?php echo $i?>]" placeholder="respuesta<?php echo $i?>" class="form-control">
                        </div>
                    <?php }?>
                    <input type="submit" class="btn btn-success btn-block" name="enviar" value="enviar">
                </form>
</div>


</div>



<?php include("includes/footer.php");?>