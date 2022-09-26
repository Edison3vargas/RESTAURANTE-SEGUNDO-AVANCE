<?php
if(isset($_POST["Reservar"])){
 if(!empty($_POST["id_lugar"]) && !empty($_POST["nombre_lugar"])){

  $id_lugar=$_POST["id_lugar"];
  $nombre_lugar=$_POST["nombre_lugar"];
  $Telefono=$_POST["Telefono"];
  $Direccion=$_POST["Direccion"];

  $sql=$conexion->query("INSERT INTO lugar(id_lugar,nombre_lugar,Telefono,Direccion) values ('$id_lugar','$nombre_lugar','$Telefono','$Direccion')");

  if($sql==1){
    echo '<div class="alert alert-success">cliente registrado</div>';
  }else{
    echo "no se pudo registrar";
  }
 }else{
    echo "los campos estan vacios";
 }
}
?>