<?php include("template/cabecera.php"); ?>
<?php 
include ("administrador/config/bd.php");
$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="jumbotron">
    <h1 class="display-3">PRODUCTOS</h1>
    <p class="lead">Aqui se podra ver todos los productos</p>
</div>

<div class="container-fluid">
<form class="d-flex">
    <form action="" method="GET">
    <input class="form-control me-2" type="search" placeholder="Buscar producto..." 
    name="busqueda"> <br>
    <button class="btn btn-outline-info" type="submit" name="enviar"><b>Buscar</b></button>   
    </form>
</div>
<?php 

if (isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $conexion->query("SELECT * FROM productos WHERE nombre LIKE '%$busqueda%'");

    while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo $row['nombre'].'<br>';
    }
}

?>

<br></br>


<?php foreach($listaProductos as $producto){ ?>

<div class="col-md-3">
<div class="card mb-3">
<img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="">
<div class="card-body">
    <h4 class="card-title mb-3"></strong>Producto: </strong><?php echo $producto['nombre']; ?></h4>
    <p class="card-text"><strong>Empresa: </strong><?php echo $producto['empresap']; ?></p>
    <a name="" id="" class="btn btn-primary" href="#" role="button"> Ver más </a>
 </div>
</div>
</div>

<?php } ?>


<?php include("template/pie.php"); ?>