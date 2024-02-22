<?php require 'src/includes/conexion.php'; ?>
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


		<a href="index.html"><img class="logo" src="img/logos/Rocky__10_RED.png" alt=""></a>

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



			<?php include 'includes/carousel.php'; ?>




		</header>


		<section class="section" id="new_modelos">


			<?php include 'includes/new_modelos.php'; ?>

		</section>


		<section class="section" id="promociones">

			<?php include 'includes/promociones.php'; ?>

		</section>




		<!--TIENDAS-->
		<section class="section" id="tiendas">


		<h1 class="texto-blanco">Visita Nuestras <span class="texto-rojo">Tiendas</span></h1>
			<div class="flex">
				<div class="accordion accordion-flush" id="accordionTiendas">
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseOne" aria-expanded="false"
								aria-controls="flush-collapseOne"  v-on:click="home">
								<b> <i class="fa-solid fa-map-location-dot"></i> Falcon</b>
							</button>
						</h2>
						<div id="flush-collapseOne" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">
								<div>
									<div>

										<div class="tienda">
											<i class="fas fa-store-alt"></i>
											<p id="coro1" v-on:click="coro1">Coro 1</p>
										</div>
										<div class="tienda">
											<i class="fas fa-store-alt"></i>
											<p id="coro2" v-on:click="coro2">Coro 2</p>
										</div>
										<div class="tienda">
											<i class="fas fa-store-alt"></i>
											<p id="trina" v-on:click="trina">Coro 3</p>
										</div>

										<div class="tienda">
											<i class="fas fa-store-alt"></i>
											<p id="nachari" v-on:click="nachari">Coro 4</p>
										</div>

									</div>

								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>
							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseTwo" aria-expanded="false"
								aria-controls="flush-collapseTwo"  v-on:click="home">
								<b>Carabobo</b>
							</button>
						</h2>
						<div id="flush-collapseTwo" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="apura" v-on:click="apura">Apura</p>
									</div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="valena" v-on:click="valena">Valencia</p>
									</div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="catica" v-on:click="catica">Catica2</p>
									</div>

								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseThree" aria-expanded="false"
								aria-controls="flush-collapseThree" v-on:click="acari">
								<b>Portuguesa</b>
							</button>
						</h2>
						<div id="flush-collapseThree" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="acari" v-on:click="acari">Acarigua</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>


					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseFour" aria-expanded="false"
								aria-controls="flush-collapseFour" v-on:click="puecruz" >
								<b>Anzoategui</b>
							</button>
						</h2>
						<div id="flush-collapseFour" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="puecruz" v-on:click="puecruz">Puerto la Cruz</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>

					
					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseFive" aria-expanded="false"
								aria-controls="flush-collapseFive" v-on:click="matur">
								<b>Monagas</b>
							</button>
						</h2>
						<div id="flush-collapseFive" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="matur" v-on:click="matur">Maturin</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>

					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseSix" aria-expanded="false"
								aria-controls="flush-collapseSix" v-on:click="cagua">
								<b>Aragua</b>
							</button>
						</h2>
						<div id="flush-collapseSix" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="cagua" v-on:click="cagua">Cagua</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>


					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseSeven" aria-expanded="false"
								aria-controls="flush-collapseSeven" v-on:click="valle">
								<b>Guarico</b>
							</button>
						</h2>
						<div id="flush-collapseSeven" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="valle" v-on:click="valle">Valle la Pascua</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>


					<div class="accordion-item">
						<h2 class="accordion-header">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#flush-collapseEight" aria-expanded="false"
								aria-controls="flush-collapseEight" v-on:click="ojena">
								<b>Zulia</b>
							</button>
						</h2>
						<div id="flush-collapseEight" class="accordion-collapse collapse"
							data-bs-parent="#accordionTiendas">
							<div class="accordion-body">

								<div>
									<div class="tienda">
										<i class="fas fa-store-alt"></i>
										<p id="ojena" v-on:click="ojena">Ciudad Ojena</p>
									</div>


								</div>
								<div id="contain_mapa" v-html="contenido_mapa"></div>

							</div>
						</div>
					</div>


				</div>

			</div>


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