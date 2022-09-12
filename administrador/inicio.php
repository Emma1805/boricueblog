<?php include('template/cabecera.php'); ?>
<?php 
 $usuario = $_SESSION['usuario'];

 if (isset($_SESSION['usuario'])) {
 
?>
            <div class="col-md-12">
                <div class="jumbotron">
                <h1 class="display-3">Bienvenido <?php echo $usuario; ?> </h1>
                <p class="lead">Vamos a administrar los productos en el blog</p>
                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar productos</a>
                </p>
            </div>
        </div>
<?php 
 }else {
  header('Location: index.php');  
 }
 
?>
<?php include('template/pie.php'); ?>

