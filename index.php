<?php

require 'funciones.php';
//Vamos a paginar o mostrar cierta cantidad de imágenes por pagina en este caso 8
$fotos_por_pagina = 10;
//para saber desde donde vamos a mostrar informacion para mostrar imagenes en la pagina actual
$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
//la variable inicio calcula el numero de fotos por pagina y la pagina en la que se encuentra
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

//Se realiza una conexion a nuestra base de datos
$conexion = conexion('galeria_gnhh', 'root', '');

if (!$conexion) {
die();
}
//preparamos nuestra consulta donde marcamos el limite inicio y pagina para ello debemos saber cuantas imagenes existen en la DB
$statement = $conexion->prepare("
SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina
");

//Ejecutamos la consulta
$statement->execute();
//Se guarda la consulta en la variable $fotos
$fotos = $statement->fetchAll();
//Si no hay fotos redireccionamos a la pagina index.php
//podemos ver el arreglo con print_ar($fotos);
if (!$fotos) {
header('Location: index.php');
}
//Preparamos otra consulta para que traiga el resultado de la consulta anterior
$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);


require 'views/index.view.php';

?>