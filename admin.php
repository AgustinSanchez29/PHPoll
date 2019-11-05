<?php include("includes/header.php");?>
<?php include("conexion.php");?>
<div class="container p-4">
<h3>Pantalla de Administrador</h3>
    <div class="row">
    <!-- Esta parte imprime una card que  obtiene el numero de preguntas por respuesta, al darle enviar te enviara
    a otra ventana con otro formulario-->
        <div class="col-md-12">

            <div class="card card-body">
                <form action="llenar.php" method="POST">
                    <label for="Pregunta">Cuantas respuestas por pregunta</label>
                    <div class="form-group">
                        <input type="number" name="respuestas" min="2" max="4" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="agregar" value="Enviar">
                </form>
            </div>
        
        </div>

        <!-- Esta parte imprime CARDS con las preguntas con sus respectivas respuestas, te permitira ahi mismo editarla y eliminarlas -->
            <?php $query="SELECT * from preguntas";
            $res=mysqli_query($con,$query);
            
            while($var=mysqli_fetch_array($res)){    
            $idPreguntas=$var["id_preguntas"];?>
            
            <div class="col-md-6 mt-5">
            <div class="card card-body">
                <form action="procesar.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="pregunta" class="form-control" value="<?php echo $var["descripcion"];?>">
                    </div>
                    <div class="form-group">
                    <textarea name="idpreguntas" rows="2" class="form-control"
                    placeholder="ID: <?php echo $idPreguntas ?>"></textarea>    
                    </div>
                    <?php $query2="SELECT * FROM respuestas where id_preguntas= $idPreguntas";
                            $res2=mysqli_query($con,$query2);  
                            $contador=1; 
                    while($var2=mysqli_fetch_array($res2)){
                       
                     $idRespuestas=$var2["id_respuestas"];?>

                    <div class="form-group">
                    <textarea name="descripcion[<?php echo $contador;?>]" rows="2" class="form-control"
                    placeholder="<?php echo $var2["descripcion"];?>"></textarea>    
                    </div>

                    <div class="form-group">
                    <textarea name="idResp[<?php echo $contador;?>]" rows="2" class="form-control"
                    placeholder="ID: <?php echo $idRespuestas;?>"></textarea>    
                    </div>
            <?php $contador++; }?>
                    
                    <input type="submit" class="btn btn-info btn-block" name="editar" value="Editar">
                    <input type="submit" class="btn btn-danger btn-block" name="eliminar" value="Eliminar">
                </form>
            </div>
            </div>
            
            <?php }?>
    
    </div>

</div>




<?php include("includes/footer.php");?>
