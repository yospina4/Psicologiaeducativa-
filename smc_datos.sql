-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 05:18:08
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smc_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `correo`, `password`) VALUES
(1, 'Yesika Ospina', 'ospinapaola397@gmail.com', 'paola397');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `edad` bigint(10) NOT NULL,
  `modalidad` varchar(30) NOT NULL,
  `telefono` bigint(15) NOT NULL,
  `nvl_estudio` varchar(30) NOT NULL,
  `opciones` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `edad`, `modalidad`, `telefono`, `nvl_estudio`, `opciones`, `descripcion`) VALUES
(1, 'Yilber Ospina', 17, 'presencial', 2345678, 'Bachiller académico', 'no', 'Cordial Saludo,\r\n\r\nTengo problemas familiares y me gustaría tener apoyo psicologico.\r\n\r\nAgradezco la ayuda,\r\nFeliz tarde'),
(2, 'Natalia Lavacude', 17, 'Virtual', 42343232, 'bachiller', 'no', 'Solicito acompañamiento psicologico.\r\ngracias'),
(4, 'Duvan Lavacude', 28, 'virtual', 321112211, 'bachiller', 'no', 'Test test Duvancho'),
(5, 'Andrea Ospina', 29, 'presencial', 23231212, 'Profesional', 'no', 'Test Andrea');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
