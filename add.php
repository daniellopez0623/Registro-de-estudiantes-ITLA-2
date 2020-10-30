<?php

include 'servicios.php';
session_start();

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['carrera'])) {

  $_SESSION['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

  $estudiante = $_SESSION['estudiantes'];

  $idestudiante = 1;

  if (isset($estudiante)) {
    $ultimoele = getLastElement($estudiante);
    $idestudiante = $ultimoele['id'] + 1;
  }


  array_push($estudiante, ['id' => $idestudiante, 'nombre' => $_POST['nombre'], 'apellido' => $_POST['apellido'], 'carrera' => $_POST['carrera']]);

  $_SESSION['estudiantes'] = $estudiante;

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
      <h2> Registrar Estudiante</h2></div>
  <div class="card-body ">

  <form action="add.php" method="post">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control " id="nombre" name="nombre" 
                            placeholder="Ingrese Su Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido"
                                placeholder="Ingrese Su Apellido">
                        </div>
                        <div class="form-group">
                            <label>Seleccionar</label>
                            <select class="form-control" id="carrera" name="carrera">
                                <?php foreach ($carrera as $key => $text) : ?>
                                <option value="<?php echo $key; ?>">
                                <?php echo $text; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                            <br></br>
                            <div>
                               <center>
                                <a href=" index.php" class="btn btn-outline-secondary"> Atras &nbsp;&nbsp;
                                    <i class="fas fa-reply-all"></i></a>
                                <button type="submit" class="btn btn-outline-success">Enviar &nbsp;&nbsp; <i
                                        class="fas fa-paper-plane"></i></button>
                            </center>
                            </div>
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