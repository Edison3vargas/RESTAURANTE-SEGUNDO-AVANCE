<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo1.css">
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
    <h1 class="tex">Registrar Cliente</h1>
    <div class="container-fluid row">
        <form class="col-10 px-12" action="" method="POST">
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar_cliente.php";
            ?>
            <div class="row">
	        <div class="col-12">
	                <fieldset>
				        <h3 class="tex3">  Información personal</h3>
	                    <div class="container-fluid">
	                        <div class="row">
                 
                <div class="col-20 col-md-5">
	            <div class="form-outline mb-4">            
                    <B><label  class="form-label">Nombres</label></B>
                    <input type="text" class="form-control" name="nombres">
                </div>
                </div>
            
                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Apellidos</label></B>
                <input type="text" class="form-control" name="apellidos">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Direccion</label></B>
                <input type="text" class="form-control" name="direccion">
                </div>
                </div>


                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Sexo</label></B>
                <input type="text" class="form-control" name="sexo">
                </div>
                </div>


                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Telefono</label></B>
                <input type="text" class="form-control" name="telefono">
                </div>
                </div>
                
                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Correo</label></B>
                <input type="text" class="form-control" name="correo">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">fecha de nacimiento</label></B>
                <input type="Date" class="form-control" name="FechaNacimiento">
                </div>
                </div>

                <div class="col-12 col-md-8">
				<button type="submit" class="btn btn-primary" name="registrar">Registrar</button>					
				</div>
                
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
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">sexo</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">fecha de nacimiento</th>
                
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from cliente");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->id_cliente ?></td>
                        <td><?= $datos->nombres ?></td>
                        <td><?= $datos->apellidos ?></td>
                        <td><?= $datos->direccion ?></td>
                        <td><?= $datos->sexo ?></td>
                        <td><?= $datos->telefono ?></td>
                        <td><?= $datos->correo?></td>
                        <td><?= $datos->FechaNacimiento?></td>
                        <td>
                            <a href="actualizarcliente.php?id=<?= $datos->id_cliente ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a onclick="return eliminar()" href="registrar.php?id=<?= $datos->id_cliente ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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