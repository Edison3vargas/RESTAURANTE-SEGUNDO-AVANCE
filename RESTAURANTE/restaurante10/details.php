<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Restaurant</title>

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
<body>

	<!-- Header -->
	<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="index.html">
	            <img src="./assets/img/logo.png" alt="logo" class="img-fluid">
	        </a>
	    </div>

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
	    <h3 class="font-weight-bold poppins-regular text-uppercase">Detalles de platillo</h3>
	    <hr>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-12 col-lg-5">
	                <!--cover-->
	                <figure class="full-box">
	                    <img class="img-fluid" src="imagenes/comida2.jpg" alt="platillo_">
	                </figure>

	                <!-- Galery -->
	                <h5 class="poppins-regular text-uppercase" style="padding-top: 70px;">Galería de imágenes</h5>
	                <hr>
	                <div class="galery-details full-box">

	                    <!--cover-->
	                    <figure class="full-box">
	                        <a data-fslightbox="gallery" href="imagenes/bebida1.png">
	                            <img class="img-fluid" src="imagenes/bebida1.png" alt="platillo_">
	                        </a>
	                    </figure>

	                    <!--otras-->
	                    <figure class="full-box">
	                        <a data-fslightbox="gallery" href="imagenes/comida1.jpg">
	                            <img class="img-fluid" src="imagenes/comida1.jpg" alt="platillo_">
	                        </a>
	                    </figure>

	                    <figure class="full-box">
	                        <a data-fslightbox="gallery" href="imagenes/comida5.jpg">
	                            <img class="img-fluid" src="imagenes/comida5.jpg" alt="platillo_">
	                        </a>
	                    </figure>

	                </div>
	            </div>
	            <div class="col-12 col-lg-7">

	                <h4 class="font-weight-bold poppins-regular tittle-details">CEVICHE</h4>

	                <p class="text-justify lead" style="padding: 40px 0;">
	                    <span class="text-info lead font-weight-bold">Descripción:</span><br>
	                    El Rocoto Relleno es un plato peruano de origen Arequipeño elaborado a partir de rocoto, que es un fruto muy picante, semejante al ají, pero de manera redondeada y de tamaño semejante al de una manzana (hay algunas especies más pequeñas), y que tiene un gusto más dulzón, que es muy apreciado primordialmente en la zona de Arequipa pero además extendido en el resto de este país
	                </p>

	                <p class="lead font-weight-bold">Precio: 30.00 SOLES</p>

	             
	                <!-- Actualizar el carrito -->
	                <form action="" style="padding-top: 70px;">
	                    <div class="container-fluid">
	                        <div class="row">
	                            <div class="col-12 col-md-6">
	                                <div class="form-outline mb-4">
	                                    <input type="text" value="1" class="form-control text-center" id="product_cant" pattern="[0-9]{1,10}" maxlength="10" >
	                                    <label for="reservaciones" class="form-label">Cantidad</label>
	                                </div>
	                            </div>
								<div class="col-12 col-md-8">
								<button type="submit" class="btn btn-primary" name="Reservar">Reservar</button>					
				</div>
	                        </div>
	                    </div>
	                </form>
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
	                    <li><h5 class="font-weight-bold" >ABANCAY</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> Peru, Abancay,Centro América</li>
	                </ul>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://www.facebook.com/luz.cuellarjuarez" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
	
	
	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js" ></script>

	<!-- fslightbox -->
	<script src="./js/fslightbox.js" ></script>

	<!-- General scripts -->
	<script src="./js/main.js" ></script>
</body>
</html>