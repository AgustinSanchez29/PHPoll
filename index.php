<?php include("includes/header.php"); ?>
<?php include("funciones.php");


if ( isset($_POST['sexo']) )  {
    entrar();
}
else {
  echo '<section>
    <div class="container">
        <h3>Datos requeridos para realizar la encuesta</h3>
        <div class="row">
        <div class="col-md-4">
        <div class="card card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="text" name="sexo" class="form-control" placeholder="Sexo" required>
                        <input type="text" name="edad" class="form-control" placeholder="Edad" required>
                        <input type="text" name="salario" class="form-control" placeholder="Salario" required>
                        <input type="text" name="provincia" class="form-control" placeholder="Provincia" required>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="index" value="Enviar">
                </form>
        </div>
        </div>
        </div>
    </div>
   </section>';
}



?>
<?php include("includes/footer.php") ?>