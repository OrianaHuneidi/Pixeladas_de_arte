<?php include "./servidor/verificar.php" ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="./style.css" rel="stylesheet" />
		<title>Pixeladas de arte</title>
	</head>
	<body x-data="{ open: false }">
		<div class="content-opciones-perfil" x-data="{ menu_perfil: false }">
			<button class="user" @click="menu_perfil = !menu_perfil"><svg  xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 256 256"><path fill="#9900ff" d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24M74.08 197.5a64 64 0 0 1 107.84 0a87.83 87.83 0 0 1-107.84 0M96 120a32 32 0 1 1 32 32a32 32 0 0 1-32-32m97.76 66.41a79.66 79.66 0 0 0-36.06-28.75a48 48 0 1 0-59.4 0a79.66 79.66 0 0 0-36.06 28.75a88 88 0 1 1 131.52 0"/></svg></button>
			<div class="content-menu" x-show="menu_perfil" x-on:click.outside="menu_perfil = false">
				<?php include "./servidor/obtener_usuario.php" ?>
				<form action="./servidor/cerrar_sesion.php" method="POST">
					<button type="submit">Cerrar sesion</button>
				</form>
			</div>
		</div>
		<div
			class="drawer-fondo"
			@click="open = false"
			x-show="open"
			x-transition
		></div>
		<div class="drawer" x-show="open" x-transition>
			<svg
				class="close"
				@click="open = false"
				xmlns="http://www.w3.org/2000/svg"
				fill="none"
				viewBox="0 0 24 24"
				stroke-width="1.5"
				stroke="currentColor"
				class="size-6"
			>
				<path
					stroke-linecap="round"
					stroke-linejoin="round"
					d="M6 18 18 6M6 6l12 12"
				/>
			</svg>
			<nav class="menu-drawer">
				<ul class="lista-menu-drawer">
					<li><a href="#inicio">Inicio</a></li>
					<li><a href="#history">Historia</a></li>
					<li><a href="#estilos">Estilos</a></li>
					<li><a href="#galeria_de_estilos">Galeria</a></li>
					<li class="login-drawer"><a href="login/index.html">Únete</a></li>
				</ul>
			</nav>
		</div>
		<header id="inicio">
			<div class="content-encabezado">
				<h1>Pixeladas de Arte</h1>
				<p>explorando el mundo de la pintura</p>
				<div class="raya"></div>
			</div>
			<button class="btn-menu" @click="open = true">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="1em"
					height="1em"
					viewBox="0 0 24 24"
				>
					<path fill="#000000" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z" />
				</svg>
			</button>
			<nav class="menu" x-cloak>
				<ul class="lista-menu">
					<li><a href="#inicio">Inicio</a></li>
					<li><a href="#history">Historia</a></li>
					<li><a href="#estilos">Estilos</a></li>
					<li><a href="#galeria_de_estilos">Galeria</a></li>
					<li class="login"><a href="login/index.php">Únete</a></li>
				</ul>
			</nav>

			<div class="hero">
				<img
					class="img-hero-header"
					src="imagenes/primer.img1.jpg"
					alt="imagenes de pinturas #picasso #vangogh"
				/>
				<div class="content-titulo-hero">
					<p class="titulo-hero-header">Para la inspiración de muchos</p>
				</div>
			</div>
		</header>
		<section id="history">
			<div class="content-wrapper">
				<div class="content-img-history">
					<img
						class="img-history"
						src="imagenes/segunda.img12.jpg"
						alt="«LA JOVEN DE LA PERLA». JOHANNES VERMEER (1665)"
					/>
				</div>
				<div class="content-history">
					<h2>Historia</h2>
					<div class="raya"></div>
					<p>
						La historia del arte abarca miles de años de creación humana, desde
						las pinturas rupestres prehistóricas hasta las formas de arte
						contemporáneo. Se puede dividir en diferentes períodos, como el arte
						antiguo, el arte medieval, el Renacimiento, el Barroco, el
						Neoclasicismo, el Romanticismo, el Realismo, el Impresionismo, el
						Modernismo y el arte contemporáneo. Cada período se caracteriza por
						estilos artísticos distintos, influenciados por factores culturales,
						políticos y sociales. El arte ha sido una forma de expresión y
						comunicación a lo largo de la historia, reflejando las creencias,
						valores y preocupaciones de las diferentes sociedades. Además, ha
						evolucionado con avances tecnológicos y cambios en la forma de ver
						el mundo.
					</p>
				</div>
			</div>
		</section>
		<main>
			<section id="estilos">
				<div class="content-h2-estilos">
					<h2>Estilos</h2>
				</div>
				<div class="content-carrusel">
					<a href="#" class="left-arrow">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 28 28"
							fill="currentColor"
							style="width: 42px; height: 42px"
						>
							<path
								fill-rule="evenodd"
								d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
								clip-rule="evenodd"
							/>
						</svg>
					</a>
					<a href="#" class="right-arrow">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 28 28"
							fill="currentColor"
							style="width: 42px; height: 42px"
						>
							<path
								fill-rule="evenodd"
								d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
								clip-rule="evenodd"
							/>
						</svg>
					</a>
					<div id="carrusel">
						<div class="carrusel">
							<div class="content-article" id="0">
								<article>
									<h3>El postimpresionista</h3>
									<p>
										Es un movimiento que surgió después del impresionismo y se
										caracteriza por una mayor expresividad, el uso de colores
										intensos y la exploración de la forma y la estructura. Este
										movimiento se caracterizó por alejarse de las limitaciones
										del impresionismo y buscar nuevas formas de expresión
										artística, manteniendo el énfasis en el uso del color y la
										luz que caracterizaba al impresionismo, pero cada uno
										desarrolló su propio estilo distintivo.
									</p>
								</article>
							</div>
							<div class="content-article" id="1">
								<article>
									<h3>El cubismo</h3>
									<p>
										Este estilo se caracteriza por la representación de la
										realidad desde múltiples puntos de vista, utilizando formas
										geométricas, líneas y planos superpuestos para crear una
										visión fragmentada y multidimensional de los objetos y
										sujetos representados. El cubismo marcó un quiebre
										significativo con las técnicas tradicionales de
										representación visual, ya que buscaba capturar la esencia
										misma del objeto en lugar de simplemente imitar su
										apariencia superficial.
									</p>
								</article>
							</div>
							<div class="content-article" id="2">
								<article>
									<h3>El arte pop</h3>
									<p>
										es un movimiento artístico que surgió en la década de 1950
										en Gran Bretaña y Estados Unidos, y se caracteriza por
										utilizar imágenes y temas populares de la cultura de masas,
										como celebridades, productos comerciales y elementos de la
										vida cotidiana, en un estilo visualmente llamativo y a
										menudo irónico. El arte pop contemporáneo continúa esta
										tradición, pero se adapta a los temas y estilos actuales.
									</p>
								</article>
							</div>
							<div class="content-article" id="3">
								<article>
									<h3>El surrealismo</h3>
									<p>
										originado en la década de 1920, se centra en liberar el
										potencial creativo del subconsciente y explorar lo
										irracional, lo onírico y lo fantástico. Los artistas
										surrealistas buscan representar realidades alternativas y
										estados de conciencia a través de imágenes sorprendentes,
										inesperadas y a menudo perturbadoras.
									</p>
								</article>
							</div>
							<div class="content-article" id="4">
								<article>
									<h3>El expresionismo</h3>
									<p>
										Surgido a principios del siglo XX, el expresionismo se
										centra en la representación emocional y subjetiva de la
										realidad, más que en una reproducción fiel de la apariencia
										visual. Los artistas expresionistas buscan transmitir
										sensaciones, estados de ánimo y experiencias a través de
										colores intensos, pinceladas enérgicas y distorsiones
										formales. Este estilo tiende a reflejar la angustia, la
										alienación y las tensiones sociales de la época en la que
										surgió, así como explorar aspectos más profundos de la
										condición humana.
									</p>
								</article>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="galeria_de_estilos">
				<div>
					<img
						src="imagenes/tercera.img1.jpg"
						alt="Pintura de Vicente Van Gohg"
					/>
					<p>Vicente Van Gohg</p>
				</div>
				<div>
					<img
						src="imagenes/tercera.img3.jpg"
						alt="Pintura de Georges Seurat"
					/>
					<p>Georges Seurat</p>
				</div>
				<div>
					<img src="imagenes/tercera.img5.jpg" alt="Pintura de Yannick Aaron" />
					<p>Yannick Aaron</p>
				</div>
				<div>
					<img src="imagenes/tercera.img6.jpg" alt="Pintura de Andy Warhol" />
					<p>Andy Warhol</p>
				</div>
				<div>
					<img src="imagenes/tercera.img7.jpg" alt="Pintura de Pablo Piccaso" />
					<p>Pablo Picasso</p>
				</div>
				<div>
					<img
						src="imagenes/tercera.img8.jpg"
						alt="Pintura Ernst Ludwig Kirchner"
					/>
					<p>Ernst Ludwig Kirchner</p>
				</div>
				<div>
					<img src="imagenes/tercera.img9.jpg" alt="Pintura Edvard Munch" />
					<p>Edvard Munch</p>
				</div>
				<div>
					<img
						src="imagenes/tercera.img10.jpg"
						alt="Pintura de René Magritte"
					/>
					<p>René Magritte</p>
				</div>
			</section>
		</main>
		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script src="./carrusel.js"></script>
		<script
			defer
			src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js"
		></script>
	</body>
</html>
