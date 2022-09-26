<?php
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from reservacion where id_reservacion=$id");
    if($sql==1){
        header("location:reservaciones.php");
      }else{
        echo "no se pudo eliminar";
      }
}
?>