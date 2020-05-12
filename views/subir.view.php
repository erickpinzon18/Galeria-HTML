<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Imagen al Sitio</h1>
        </div>
    </header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" 
        action="
        <?php 
            echo htmlspecialchars($_SERVER['PHP_SELF']); 
        ?>
        ">
           
            <label for="foto">Selecciona tu Imagen</label>
            <input type="file" id="foto" name="foto">
            <label for="titulo">Titulo de la Imagen</label>
            <input type="text" id="titulo" name="titulo">
            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
            <input type="submit" class="submit" value="Subir Foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Erick Pinzon</p>
    </footer>

</body>
</html>
</body>
</html>
