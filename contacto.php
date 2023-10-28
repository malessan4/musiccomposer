<!DOCTYPE html>
<html>
<head>
	<title>Contacto</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloformulario.css">
</head>
	<header class="header">
		<div class="headerLogo">
			<img src="mdagrade2.jpg" alt="Logo MDA"></a>
			<h1 class=Logo> Matias Daniel Alessandrello </h1>
			<p> Composición & Producción Musical </p>

		</div>
		<nav class="headerMenu">
			<ul>
				<li> <a href="index.html">Inicio</a> </li>
				<li> <a href="sobremi.html">Sobre Mi</a></li>
                <li> <a href="Cursos.html">Cursos</a></li>
				<li> <a href="https://linktr.ee/maless" role="button" target="blanck">Obras</a> </li>
				<li> <a href="https://drive.google.com/drive/u/0/folders/1gqw_iskVCQyoT3YtO7yThr6Eu2BfIqqI" role="button"target="blanck2"> Partituras</a> </li>			

			</ul>
		</nav>
	</header>
	
<body>
	<form method="post">
		<h1>¡Suscribite!</h1>
		<input type="text" name="name" placeholder="Nombre completo">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="register">
	</form>
	
		<?php
		include("registrar.php");
		?>

</body>
</html>