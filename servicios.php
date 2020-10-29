<?php

  $carrera = array( [0=>"Seleccionar",1=>"Software",2=>"Seguridad",3=>"Multimedia",4=>"Mecatronica",5=>"Sonido"]);
  
  
function getLastElement($lista){
    $contarlista=count($lista);
    $ultimoele=$lista[$contarlista - 1];

    return $ultimoele;
}
function getcarrera($idcarrera){

    return $GLOBALS['carrera'][$idcarrera];
}

function buscar($lista,$propiedad,$valor){

$filtral=[];

foreach ($lista as $articulo) {
  
  if($articulo[$propiedad]==$valor){

    array_push($filtral,$articulo);
  }

}
return $filtral;
}

function getelemento($lista,$propiedad,$valor){

$inicio=0;

foreach ($lista as $key => $articulo) {
  
  if($articulo[$propiedad]==$valor){

    $inicio=$key;
  }

}
return $inicio;
}

?>