-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2020 a las 21:35:43
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria_gnhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(1, 'CUBREBOCAS', 'k-i-l-i-a-n-Mbfz0Lm2jr0-unsplash.jpg', 'Para cuarentena usar cubrebocas'),
(2, 'TAZA DE CAFE', 'datos.jpg', 'Taza de Café con guantes para proteccion'),
(3, 'JABON', 'triste.png', 'El jabon se volvio mas indispensable que nunca'),
(6, 'LETREROS', 'lopez.jpg', 'Letreros sobre advertencia de contagios y coronavirus'),
(7, 'METRO', 'medidas.jpg', 'Metro muy vacio y muy desinfectado'),
(10, 'PERRITO', 'perrito.png', 'Perrito con cubrebocas muy bonito'),
(11, 'SILLA', 'CORONA.jpg', 'Silla con cubrebocas que demuestra que los cubrebocas son indispensables  y se usan en todos lados'),
(12, 'CINE', 'CUBREBOCAS.jpg', 'Cine solo, sin ningun cliente ya que estan cerrados'),
(13, 'NETFLIX', 'ONLINE.jpg', 'Se hizo una plataforma muy usada ya que estamos sin nada que hacer en casa'),
(14, 'METRO', 'COV.jpg', 'Metro vacio, sin ninguna persona adentro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
