<?php 

session_start();

include 'servicios.php';


$estudiante=$_SESSION['estudiantes'];

if(isset($_GET['id'])){

    $idestudiante=$_GET['id'];

    $elementoinicio= getelemento ($estudiante,'id',$idestudiante);

    unset($estudiante[$elementoinicio]);

    $_SESSION['estudiantes']= $estudiante;

}

header("location: index.php");
exist();

?>