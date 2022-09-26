<?php
if(isset($_POST["actualizar"])){
 
  $num_mesa=$_POST["num_mesa"];
  $disponible=$_POST["disponible"];

  $sql=$conexion->query("INSERT INTO mesa (num_mesa,disponible) values ('$num_mesa','$disponible')");

  if($sql==1){
    echo '<div class="alert alert-success">cliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
?>