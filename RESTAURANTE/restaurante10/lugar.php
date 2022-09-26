<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/lugar.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="css/all.min.js"></script>
</head>
<aside>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("seguro que desea eliminar?");
            return respuesta;
        }
    </script>
    <h1 class="tex">MESAS DISPONIBLES</h1>
    <div class="container-fluid row">
        <form class="col-10 px-12" action="" method="POST">
            <?php
            include "modelo/conexion.php";
            include "controlador/mesa_disponible.php";
            ?>
            <div class="row">
	        <div class="col-12">
	                <fieldset>
	                    <div class="container-fluid">
	                        <div class="row">
                
         </from>
            
        </form>
        </div>
        </div>
        <br>
        <br>
        
        <div class="col-12">
            <?php
            include "controlador/eliminar_cliente.php";
            ?>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id_lugar</th>
                <th scope="col">nombre_lugar</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from lugar");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->id_lugar ?></td>
                        <td><?= $datos->nombre_lugar ?></td>
                        <td><?= $datos->Telefono?></td>
                        <td><?= $datos->Direccion?></td>
                        <td>
                        <label><input type="checkbox" id="cbox1" value="first_checkbox">
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</aside>
</html>