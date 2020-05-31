<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ver Foto</title>
</head>
<body>
    <center>    
        <header>
            <div class="contenedor">
                <h1 class="titulo">Foto: <?php 
                    if (!empty($foto['titulo'])) {
                        echo $foto['titulo'];
                    } else {
                        echo $foto['imagen'];
                        } ?>
                </h1>
            </div>
        </header>

        <div class="contenedor">
            <div class="foto">
                <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
                <p align="center" class="texto"><?php echo $foto['texto']; ?></p>
                <a href="index.php" class="regresar"> Regregar</a>
            </div>
        </div>
    
        <footer>
            <p class="copyright">Galeria creada por Pinzon Huerta Erick / Algalan Murillo Diego Alexis</p>
        </footer>
    </center>
</body>
</html>