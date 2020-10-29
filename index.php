<?php

session_start();

$_SESSION ['estudiantes'] = isset($_SESSION['estudiantes']) ? $_SESSION['estudiantes'] : array();

$idlista = $_SESSION['estudiantes'];

include 'servicios.php';

if(!empty($idlista)){

if(isset($_GET['idcarrera'])){

$idlista = buscar($idlista,'carrera',$_GET['idcarrera']);
}
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
    <title>Registro Itla</title>
</head>
<body>
    

<div class="card text-center">    
  <div class="card-header">
   <h1>Registro de Estudiante</h1> 
   <br>
   <div class="row container">
       <div class="col-12 "> 
               <a href="#" class="btn btn-lg btn-block btn-success">Registrar Nuevo Estudiante &nbsp; 
               <i class="far fa-address-book"></i> </a> 
         </br>

        <h5>Click para buscar por carrera!! <i class="fas fa-search"></i></h5> 
     </div>
       <div class="col-12 btn-group">
          <br> </br> 
       <a href="index.php" class="btn btn-lg btn-outline-primary">
           <i class="fas fa-users"></i><br> Todos</a>
        <a href="index.php?idcarrera=1" class="btn btn-lg btn-outline-primary">
            <i class="fas fa-laptop-code"></i><br> Software </a>
        <a href="index.php?idcarrera=2" class="btn btn-lg btn-outline-primary">
            <i class="fas fa-cloud"></i><br> Seguridad </a>
        <a href="index.php?idcarrera=4" class="btn btn-lg btn-outline-primary">
            <i class="fas fa-cogs"></i><br>Mecatronica </a>
        <a href="index.php?idcarrera=3" class="btn btn-lg btn-outline-primary">
            <i class="fas fa-camera"></i><br>Multimedia</a>
        <a href="index.php?idcarrera=5" class="btn btn-lg btn-outline-primary">
        <i class="fab fa-itunes-note"></i><br>Sonido</a>
       </div>
   </div>
  
  </div>
  <div class="card-body container">
    






  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
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