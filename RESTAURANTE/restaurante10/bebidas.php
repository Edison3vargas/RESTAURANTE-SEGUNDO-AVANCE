<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Restaurant</title>
	<link rel="stylesheet" href="./css/estilo2.css">

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="./css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="./css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="./css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="./js/sweetalert2.js" ></script>

	<!-- General Styles -->
	<link rel="stylesheet" href="./css/style.css">

</head>
<aside>
<body>

    
	<header class="header full-box">
	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
	                <li>
	                    <a href="index.html" >Inicio<span class="full-box" ></span></a>
	                </li>
	                <li>
	                    <a href="menu.html" >Menú<span class="full-box" ></span></a>
	                </li>
	            </ul>
	        </nav>
	    </div>
	</header>


	<!-- Content -->
	<div class="container container-web-page">
	    <h3 class="font-weight-bold poppins-regular text-uppercase">MENU DE BEBIDAS</h3>
	    <p class="text-justify">Bienvenido al menú de bebidas, acá encontrara todas la bebidas disponibles en el restaurante.</p>

	    <div class="container-fluid" style="border-top: 1px solid #E1E1E1; padding: 20px; 0">
	        <div class="row align-items-center">
	            <div class="col-12 col-sm-4 text-center text-sm-start">
	                <div class="dropdown">
	                    <button class="btn btn-link dropdown-toggle" type="button" id="categorySubMenu" data-mdb-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                        <i class="fas fa-hamburger fa-fw"></i> &nbsp; Menú
	                    </button>
	                    <div class="dropdown-menu" aria-labelledby="categorySubMenu">
	                        <a class="dropdown-item" href="menu.php">Menú 1: COMIDA</a>
	                        <a class="dropdown-item" href="bebidas.php">Menú 2: BEBIDAS</a>
	                        <a class="dropdown-item" href="postres.php">Menú 3: POSTRES</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="container-cards full-box" style="padding-bottom: 40px;">

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida1.png" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">LIMONADA</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">5.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida2.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">TE HELADO</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">5.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida5.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">JUGO DE NARANJA</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">10.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida6.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">MALTEADA</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">10.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida7.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">HELADO</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">25.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	        <div class="card shadow-1-strong">
	            <img class="card-img-top" src="./imagenes/bebida8.jpg" alt="nombre_platillo">
	            <div class="card-body text-center">
	                <h5 class="card-title font-weight-bold">CAPUCHINO</h5>
	                <p class="card-text lead"><span class="badge bg-secondary">8.00 SOLES</span></p>
	            </div>
	            <div class="card-body text-center">
	                <a href="details.php" class="btn btn-info btn-sm"><i class="fas fa-utensils fa-fw"></i> &nbsp; Detalles</a>
	            </div>
	        </div>

	    </div>


	    <nav aria-label="Page navigation example">
	        <ul class="pagination justify-content-center">
	            <li class="page-item">
	                <a class="page-link" href="#">Anterior</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">1</a>
	            </li>
	            <li class="page-item active">
	                <a class="page-link" href="#">2</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">3</a>
	            </li>
	            <li class="page-item">
	                <a class="page-link" href="#">Siguiente</a>
	            </li>
	        </ul>
	    </nav>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="saucerModal" tabindex="-1" aria-hidden="true" aria-labelledby="saucerModalLabel" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h5 class="modal-title" id="saucerModalLabel">Buscar platillo</h5>
	                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
	            </div>
	            <div class="modal-body">
	                <div class="form-outline mb-4">
	                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,25}" class="form-control" name="buscar_platillo" id="buscar_platillo" maxlength="25">
	                    <label for="buscar_platillo" class="form-label">¿Qué estás buscando?</label>
	                </div>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-danger" data-mdb-dismiss="modal"><i class="fas fa-times fa-fw"></i> &nbsp; Cerrar</button>
	                <button type="button" class="btn btn-info"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar</button>
	            </div>
	        </div>
	    </div>
	</div>


	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> Carlos Alfaro 2021</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >El Salvador</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> San Salvador, El Salvador, Centro América</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://es-la.facebook.com/CarlosAlfaroES/" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>

	                    <li>
	                        <a href="https://www.youtube.com/c/CarlosAlfaro007" class="footer-link" target="_blank" >
	                            <i class="fab fa-youtube fa-fw"></i>
	                                Youtube
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>

	
	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="./js/main.js" ></script>
</body>
</aside>
</html>