-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2024 a las 01:27:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dislexiakids_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institución`
--

CREATE TABLE `institución` (
  `idInstitucion` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `numero` varchar(12) DEFAULT NULL,
  `correo` varchar(60) DEFAULT NULL,
  `ubicacion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `institución`
--

INSERT INTO `institución` (`idInstitucion`, `logo`, `nombre`, `descripcion`, `numero`, `correo`, `ubicacion`) VALUES
(1, 'ubr_tepexi.jpg', 'UBR de Tepexi de Rodríguez ', 'La UBR Tepexi de Rodríguez es una área asignada para la rehabilitación biopsicosocial, con el objetivo principal de brindar a los usuarios una atención con personal capacitado para una rehabilitación total o parcial, con un trato digno y humano.', '0', '@', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242028.1317446275!2d-98.07443636231558!3d18.588029499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cf7997259fc043%3A0xbc22cb2b3aa6470b!2sUnidad%20B%C3%A1sica%20de%20Rehabilitaci%C3%B3n%20de%20Tepexi%20de%20Rodr%C3%ADguez!5e0!3m2!1ses-419!2smx!4v1720113906965!5m2!1ses-419!2smx\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(3, 'ubr_ixcaq.jpg', 'UBR Ixcaquixtla', 'Institución dedicada a proporcionar servicios de rehabilitación física a personas con discapacidad temporal o permanente. Su objetivo es mejorar la calidad de vida de sus usuarios mediante programas y tratamientos específicos que les ayuden a recuperar o ', '0', 'unidad_basica_rehabilitacion@a', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242208.21651247778!2d-98.13383102416994!3d18.460844186133503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cf7d7fca236123%3A0x25908c7d3fea6cc5!2sUBR%20Ixcaquixtla!5e0!3m2!1ses-419!2smx!4v1720115122949!5m2!1ses-419!2smx\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(4, 'ubr_ye.jpg', 'UBR Yehualtepec', 'Institución dedicada a proporcionar servicios de rehabilitación integral a personas con discapacidad temporal o permanente. Su misión es mejorar la calidad de vida de sus usuarios mediante programas y tratamientos que les ayuden a recuperar o mantener sus', '0', '@', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d261246.1011642175!2d-97.9229729476441!3d18.691206407359164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c57b9dd27f9a2b%3A0x9fd154c59443b7bf!2sUBR%2C%20Unidad%20B%C3%A1sica%20de%20Rehabilitaci%C3%B3n%20Yehualtepec!5e0!3m2!1ses-419!2smx!4v1720115716450!5m2!1ses-419!2smx\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `idReporte` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `prueba1` int(11) DEFAULT NULL,
  `prueba2` int(11) DEFAULT NULL,
  `prueba3` int(11) DEFAULT NULL,
  `prueba4` int(11) DEFAULT NULL,
  `resultado` int(11) DEFAULT NULL,
  `tiempo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `institución`
--
ALTER TABLE `institución`
  ADD PRIMARY KEY (`idInstitucion`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`idReporte`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `institución`
--
ALTER TABLE `institución`
  MODIFY `idInstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `idReporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
