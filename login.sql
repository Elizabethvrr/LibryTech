-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 19:34:30
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `fecha` varchar(30) NOT NULL,
  `autor` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `nombredealumno` varchar(30) NOT NULL,
  `fechaentrega` varchar(30) NOT NULL,
  `nombreencargado` varchar(30) NOT NULL,
  `gradugrupoturno` varchar(30) NOT NULL,
  `bachillerato` varchar(30) NOT NULL,
  `codigobarras` varchar(30) NOT NULL,
  `numeroejemplar` varchar(30) NOT NULL,
  `codigoalumno` varchar(30) NOT NULL,
  `celularalumno` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`fecha`, `autor`, `titulo`, `nombredealumno`, `fechaentrega`, `nombreencargado`, `gradugrupoturno`, `bachillerato`, `codigobarras`, `numeroejemplar`, `codigoalumno`, `celularalumno`, `correo`) VALUES
('18/11/2020', 'John Green', 'Bajo la misma estrella', 'Elizabeth Villarruel Rosales', '10/12/2020', 'Maestra Marisol', '6AT/M', 'bgc', '12414', '5', '2182015772', '3322274666', 'ElizabethVROSALES@alumnos.udg.'),
('21/11/2020', 'Antoine de Saint-Exupéry', 'El principito', 'Guadalupe Ortega Perez', '28/11/2020', 'Maestra Marisol', '4AT/V', 'bgc', '89271', '2', '21015789', '332228961', 'Guadalupe_Ortega@alumnos.udg.m');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`) VALUES
('1', 'preparatoria17', 'udgbiblio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`fecha`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
