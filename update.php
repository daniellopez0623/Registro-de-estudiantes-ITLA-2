<?php

include 'servicios.php';
session_start();

if(isset($_GET['id'])){

$idestudiante=$_GET['id'];

$_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

  $estudiante = $_SESSION['estudiantes'];

$elemento=buscar($estudiante,'id',$idestudiante)[0];

$elementoinicio= getelemento($estudiante,'id',$idestudiante);

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera'])) {

$actualizar=['id' => $idestudiante, 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'carrera' => $_POST['carrera']];

  $estudiante[$elementoinicio]=$actualizar;
 
  $_SESSION['estudiantes'] = $estudiante;

  header("location: index.php");
  exit();

}
}else{

header("location: index.php");
  exit();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/framework/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <title>Document</title>
</head>
<body>
    

<div class="card border-success container ">
  <div class="card-header text-center text-success bg-transparent border-success">
      <h2> Editar Estudiante</h2></div>
  <div class="card-body ">

     
                    <form action="update.php?id=<?php echo $elemento['id'] ?>" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" value=<?php echo $elemento['nombre'] ?> class="form-control " id="nombre" name="nombre" placeholder="Nuevo Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" value=<?php echo $elemento['apellido'] ?> class="form-control"
                                id="apellido" name="apellido" placeholder="Nuevo Apellido">
                        </div>

                        <div class="form-group">
                            <label>seleccionar</label>
                            <select class="form-control" id="carrera" name="carrera">

                                <?php foreach ($carrera as $key => $text) : ?>

                                <?php if($key == $elemento['carrera']): ?>

                                <option value="<?php echo $key; ?>"><?php echo $text; ?></option>

                                <?php else: ?>

                                <option value="<?php echo $key; ?>"><?php echo $text; ?></option>

                                <?php endif;?>
                                <?php endforeach; ?>

                            </select>
                            <br>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="activo">
                                <label class="form-check-label" for="activo" name="activo">&nbsp;&nbsp;Activo</label>
                            </div>
                            </br>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="inactivo">
                                <label class="form-check-label" for="inactivo" name="inactivo">&nbsp;&nbsp;Inactivo</label>
                            </div>
                            <br></br>
                            <center>
                                <a href=" index.php" class="btn btn-outline-secondary"> Atras &nbsp;&nbsp;
                                    <i class="fas fa-reply-all"></i></a>
                                <button type="submit" class="btn btn-outline-success">Enviar &nbsp;&nbsp; <i
                                        class="fas fa-paper-plane"></i></button>
                            </center>
                        </div>
                    </form>

        
  </div>
  <div class="card-footer bg-transparent border-success">Footer</div>
</div>



</body>

<script src="https://kit.fontawesome.com/96e239109c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</html>