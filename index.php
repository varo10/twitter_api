<!DOCTYPE html>
<html>
<head lang="es">
	<title>Twitter API</title>
	<meta charset="utf-8">
	<script src="twapp.js"></script>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<div id="principal">
	<section id="mapa">
	</section>
	<section id="tarjetas">
		<div id="arriba">
			<article class="tarjeta">
				<h3>Clima</h3>
				<div id="clima">
					
				</div>
			</article>
			<article class="tarjeta">
				<h3>Contaminación</h3>
				<div id="contaminacion">
					
				</div>
			</article>
		</div>
		<div id="abajo">
			<article class="tarjeta">
				<h3>Tweets</h3>
				<div id="tweets">
					
				</div>
			</article>
			<article class="tarjeta">
				<h3>Avisos</h3>
				<div id="avisos">
					<section id="logo">
						<img src="">
					</section>
					<section id="contenido">
						<p id="cuenta"> <span id="usuario"></span></p>
						<p id="tweet"></p>
					</section>
				</div>
			</article>
		</div>
	</section>
</div>
</body>
</html>