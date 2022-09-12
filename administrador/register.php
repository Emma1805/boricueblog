<?php 
include("config/bd.php");

$mensaje = '';

if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['empresa']) && !empty($_POST['contrasena'])) {
  $sql = "INSERT INTO users (usuario, email, empresa, contrasena) VALUES (:usuario, :email, :empresa, :contrasena)";
  $stmt = $conexion->prepare($sql);
  $stmt->bindParam(':usuario',$_POST['usuario']);
  $stmt->bindParam(':email',$_POST['email']);
  $stmt->bindParam(':empresa',$_POST['empresa']);
  $stmt->bindParam(':contrasena',$_POST['contrasena']);

  if ($stmt->execute()) {
    $mensaje = 'Registrado';
  }else{
    $mensaje = 'Lo siento te has equivocado en alguno de tus datos';
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Formulario de registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="container">
        <div class="row">

         <div class="col-md-4">
            
         </div>
            <div class="col-md-3">
<br/><br/><br/>
            <div class="card">
                <div class="card-header text-center">
                    Registro
                </div>

                <div class="card-body">

                <?php if (!empty($mensaje)):?>
                <p class="alert alert-success text-center" role="alert">
                  <?= $mensaje ?>
                </p>
                <?php endif; ?>
                <form method="POST" >

                <div class = "form-group">
                <label>Usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                </div>

                <div class = "form-group">
                <label>Correo electronico</label>
                <input type="text" class="form-control" name="email" placeholder="Escribe tu correo">
                </div>

                <div class="form-group">
                <label>Empresa</label>
                <input type="text" class="form-control" name="empresa" placeholder="Escribe tu empresa">
                </div>

                <div class="form-group">
                <label>Contraseña</label>
                <input type="password" class="form-control" name="contrasena" placeholder="Escribe tu contraseña">
                </div>


                <button type="submit" class="btn btn-primary">Registrar</button>


                </form>

                </br>
                
                </div>

                </div>
            </div>
                
            </div>
            
        </div>
    </div>
   
  </body>
</html>