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
            include "controlador/reservar_restaurante.php";
            ?>
            <div class="row">
	        <div class="col-12">
	                <fieldset>
				        <h3 class="tex3">  Información personal</h3>
	                    <div class="container-fluid">
	                        <div class="row">
                 
                <div class="col-20 col-md-5">
	            <div class="form-outline mb-4">            
                    <B><label  class="form-label">Nombre</label></B>
                    <input type="text" class="form-control" name="Nombre">
                </div>
                </div>
            
                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Apellido</label></B>
                <input type="text" class="form-control" name="Apellido">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Telefono</label></B>
                <input type="text" class="form-control" name="Telefono">
                </div>
                </div>


                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Correo</label></B>
                <input type="text" class="form-control" name="Correo">
                </div>
                </div>


                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4"> 
                <B><label  class="form-label">Lugar</label></B>
                <input type="text" class="form-control" name="Lugar">
                </div>
                </div>
                
                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Fecha</label></B>
                <input type="date" class="form-control" name="Fecha">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Hora</label></B>
                <input type="text" class="form-control" name="Hora">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">numero de persona</label></B>
                <input type="text" class="form-control" name="NumeroPersonas">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Presiciones</label></B>
                <input type="text" class="form-control" name="Presiciones">
                </div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">DNI</label></B>
                <input type="text" class="form-control" name="DNI">
                </div>
                </div>

                <div class="col-12 col-md-5">
                <div class="form-outline mb-4">
                <B><label  class="form-label">Lugar</label></B>
                <a href="lugar.php"><input type="text" class="form-control" name="id_lugar"></a>	
                </div>
                </div>
                            
                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Mesa</label></B>
                <a href="mesa.php"><input type="text" class="form-control" name="id_mesa"></a>		
				</div>
                </div>

                <div class="col-12 col-md-5">
	            <div class="form-outline mb-4">
                <B><label  class="form-label">Cantidad de plato</label></B>
                <a href="details.php"><input type="text" class="form-control" name="Cantidad"></a>		
				</div>
                </div>

                
                <div class="col-12 col-md-8">
				<button type="submit" class="btn btn-primary" name="Reservar">Reservar</button>					
				</div>
         </from>
        </form>
        </div>
        </div>
        <br>
        <br>
        
        <div class="col-12">
            <?php
            include "controlador/eliminar_reserva.php";
            ?>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Lugar</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">NumeroPersonas</th>
                <th scope="col">Presiciones</th>
                <th scope="col">DNI</th>
                <th scope="col">Lugar</th>
                <th scope="col">Mesa</th>
                <th scope="col">Cantidad de plato</th>
                <th scope="col">   </th>

                
                </tr>
            </thead>
            <tbody>
                <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from reservacion");
                    while($datos=$sql->fetch_object()){
                ?>
                    <tr>
                        <td><?= $datos->id_reservacion ?></td>
                        <td><?= $datos->Nombre?></td>
                        <td><?= $datos->Apellido?></td>
                        <td><?= $datos->Telefono?></td>
                        <td><?= $datos->Correo?></td>
                        <td><?= $datos->Lugar?></td>
                        <td><?= $datos->Fecha?></td>
                        <td><?= $datos->Hora?></td>
                        <td><?= $datos->NumeroPersonas?></td>
                        <td><?= $datos->Presiciones?></td>
                        <td><?= $datos->DNI?></td>
                        <td><?= $datos->id_lugar?> </td>
                        <td><?= $datos->id_mesa?> </td>
                        <td><?= $datos->Cantidad?> </td>
                        
                        <td>
                            <a href="actualizarReserva.php?id=<?= $datos->id_reservacion ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            
                            <td>

                            <a onclick="return eliminar()" href="reservaciones.php?id=<?= $datos->id_reservacion ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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