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