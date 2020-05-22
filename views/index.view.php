<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Agregamos nuestro archivo de estiulos CSS-->
<link rel="stylesheet" href="css/estilos.css">
<title>Proyecto De CSS Galería Hernández Salvador</title>
</head>
<body>
<header>
<div class="contenedor">
<h1 class="titulo">Galería de Mis Reflexiones del 2020</h1>
</div>
</header>


<section class="fotos">
<div class="contenedor">
<?php foreach($fotos as $foto):?>
<div class="thumb">
<a href="foto.php?id=<?php echo $foto['id']; ?>">
<img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
</a>
</div>
<?php endforeach;?>

<!-- En este apartado agregamos una paginación para mostrar solo una cantidad de imagnenes por pagina-->
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
<!-- Se agrega la etiqueta de pie de pagina para crear Cambia por tus datos-->
<footer>
<p class="copyright">Galeria creada por Algalan Murillo Diego Alexis y Pinzon Huerta Erick</p>
</footer>
</body>
</html>