<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tiendas Rocky</title>
	<link href="../img/icono_zapato.png" rel="icon">
	<link href="img/icono_zapato.png" rel="apple-touch-icon">
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.css">
	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/bootstrap.css">


	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">



</head>
<style>
	.sitio {
		border-bottom: 2px solid #FE0000;

	}
</style>

<body onload="con()">
	<!-- NAVEGADOR  -->
	<nav class="navegador">


		<a href="index.html"><img class="logo" src="../img/logos/Rocky__10_RED.png" alt=""></a>

		<ul id="menu">
			<li class="sitio"><a href="#header">Inicio</a></li>
			<li><a href="#tiendas" class="nsedes">Nuestras Sedes</a></li>
			<li><a href="#productos">Damas</a></li>
			<li><a href="#productos">Caballeros</a></li>
			<li><a href="#productos">Niños</a></li>
			<li><a href="src/home.php" class="promo">¡PROMOCIONES!</a></li>

		</ul>

	</nav>



	<main id="fullpage">


		<header class="section" id="header">



			<?php include 'includes/new_modelos.php'; ?>




		</header>


		<section class="section" id="new_modelos">


			<?php include 'includes/new_modelos.php'; ?>

		</section>


		<section class="section" id="promociones">

			<?php include 'includes/promociones.php'; ?>

		</section>




		<!--TIENDAS-->
		<section class="section" id="tiendas">


			<?php include 'includes/tiendas.php'; ?>


		</section>

		<footer class="section" id="footer">

			<?php include 'includes/footer.php'; ?>


		</footer>


	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.js"></script>
	<script src="js/fullpage.js"></script>
	<script src="js/jquery-3.5.1.js"></script>
	<!--VUEJS-->
	<script src="js/vue.js"></script>
	<script src="js/vue@2.6.12"></script>
	<!-- 	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script> -->
	<script src="../js/cambio_mapa.js"></script>
	<script src="../js/cambio_mapa_dos.js"></script>
	<script src="../js/cambio_mapa_tres.js"></script>
	<!-- 	<script src="/js/cambio_mapa_dos.js"></script> -->
	<script src="js/slider.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>