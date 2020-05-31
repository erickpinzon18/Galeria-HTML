<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Subir Imagen</title>
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

    <div class="contenedor">
        <center>
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
        <center>
    </div>

    <footer>
        <p class="copyright">Galeria creada por Algalan Murillo Diego Alexis y Pinzon Huerta Erick</p>
    </footer>

</body>
</html>
