<?php
if(isset($_POST["actualizar"])){
    if(!empty($_POST["Nombre"]) && !empty($_POST["Apellido"]) && !empty($_POST["Telefono"])){

     $id=$_GET["id"];
     $Nombre=$_POST["Nombre"];
     $Apellido=$_POST["Apellido"];
     $Telefono=$_POST["Telefono"];

     $sql=$conexion->query("UPDATE reservacion SET Nombre='$Nombre', Apellido='$Apellido',Telefono='$Telefono' WHERE id_reservacion=$id");
     if($sql==1){
        header("location:index.php");
      }else{
        echo "no se pudo registrar";
      }
     }else{
        echo "los campos estan vacios";
     }
    }

?>