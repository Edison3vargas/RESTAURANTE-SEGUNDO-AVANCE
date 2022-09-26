<?php
if(isset($_POST["Reservar"])){
 if(!empty($_POST["Nombre"]) && !empty($_POST["Apellido"])){

  $Nombre=$_POST["Nombre"];
  $Apellido=$_POST["Apellido"];
  $Telefono=$_POST["Telefono"];
  $Correo=$_POST["Correo"];
  $Lugar=$_POST["Lugar"];
  $Fecha=$_POST["Fecha"];
  $Hora=$_POST["Hora"];
  $NumeroPersonas=$_POST["NumeroPersonas"];
  $Presiciones=$_POST["Presiciones"];
  $DNI=$_POST["DNI"];
  $id_lugar=$_POST["lugar"];
  $id_mesa=$_POST["mesa"];
  $Cantidad=$_POST["Cantidad"];
  

  $sql=$conexion->query("INSERT INTO reservacion (Nombre,Apellido,Telefono,Correo,Lugar,Fecha,Hora,NumeroPersonas,Presiciones,DNI,id_lugar,id_mesa,Cantidad) values ('$Nombre','$Apellido','$Telefono','$Correo','$Lugar','$Fecha','$Hora','$NumeroPersonas','$Presiciones','$DNI','$id_lugar','$id_mesa','$Cantidad')");

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