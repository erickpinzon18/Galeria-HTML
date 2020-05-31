<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Proyecto De CSS Galería Hernández Salvador</title>
</head>
<body>
	<center>    
		<header>
    		<div class="contenedor">
    			<h1 class="titulo">Galería de Mis Reflexiones del 2020</h1>
    		</div>
			<nav>
				<ul type="none">
					<li class="NavElement">
						<a href="reflexion.php">Inicio</a>
					</li>
					<li class="NavElement">
						<a href="index.php">Galeria</a>
					</li>
					<li class="NavElement">
						<a href="subir.php">Subir</a>
					</li>
					<li class="NavElement">
						<a href="acerca.php">About</a>
					</li>
				</ul>
			</nav>
    	</header>
	<center>

	<section class="fotos">
		<div class="contenedor">
			<?php foreach($fotos as $foto):?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id']; ?>">
						<img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
					</a>
				</div>
			<?php endforeach;?>

			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"> Pagina Anterior</a>
				<?php endif ?>

				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente </a>
				<?php endif ?>
			</div>
		</div>
	</section>

	<footer>
		<p class="copyright">Galeria creada por Algalan Murillo Diego Alexis y Pinzon Huerta Erick</p>
	</footer>
</body>
</html>