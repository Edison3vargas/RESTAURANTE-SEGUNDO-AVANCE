-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2022 a las 23:43:46
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
-- Base de datos: `ejemplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombres` varchar(20) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `apellidos` varchar(30) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `sexo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombres`, `apellidos`, `direccion`, `sexo`, `telefono`, `correo`, `FechaNacimiento`) VALUES
(60, 'CARLOS', 'SANCHEZ PEREZ', 'av. chile', 'M', '987345234', 'Carlosodd213@gmail.com', '4943-03-09'),
(61, 'CARLOS', 'SANCHEZ PEREZ', 'av. chile', 'M', '987345234', 'Carlosodd213@gmail.com', '2001-03-03'),
(63, 'CARLOS', 'SANCHEZ PEREZ', '4LRL4RLK4KR', 'M', '484883', 'Carlosodd213@gmail.com', '2002-09-09'),
(64, 'CARLOS', 'SANCHEZ PEREZ', 'av. chile', 'F', 'R432', '23R4', '2022-09-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `id_lugar` varchar(100) NOT NULL,
  `nombre_lugar` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`id_lugar`, `nombre_lugar`, `Telefono`, `Direccion`) VALUES
('L001', 'Abancay', 983456092, 'A.V chile'),
('L002', 'Abancay', 983484092, 'A.V. peru');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id_mesa` int(11) NOT NULL,
  `num_mesa` varchar(50) NOT NULL,
  `disponible` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id_mesa`, `num_mesa`, `disponible`) VALUES
(1, 'mesa 1', 'si'),
(2, 'mesa 2', 'si'),
(3, 'mesa 3', 'no'),
(4, 'mesa 4', 'si'),
(5, 'mesa 5', 'no');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacion`
--

CREATE TABLE `reservacion` (
  `id_reservacion` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Lugar` varchar(50) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` varchar(100) DEFAULT NULL,
  `NumeroPersonas` int(11) NOT NULL,
  `Presiciones` varchar(100) NOT NULL,
  `DNI` int(11) NOT NULL,
  `id_lugar` varchar(100) NOT NULL,
  `id_mesa` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reservacion`
--

INSERT INTO `reservacion` (`id_reservacion`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Lugar`, `Fecha`, `Hora`, `NumeroPersonas`, `Presiciones`, `DNI`, `id_lugar`, `id_mesa`, `Cantidad`) VALUES
(9, 'Luz nerida', 'Cuellar Juarez', 930546911, 'luzneridacuellarjuarez815@gmail.com', 'Tamburco', '2022-09-28', 'diez', 7, 'vista a la ciudad', 46578932, '', 0, 0),
(10, 'RONALH', 'SANCHEZ', 0, 'RONAL2341@gmail.com', 'a.v chile', '2022-09-14', 'diez', 6, 'vista a la ciudad', 46578932, '', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id_mesa`);

--
-- Indices de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  ADD PRIMARY KEY (`id_reservacion`),
  ADD KEY `id_lugar` (`id_lugar`),
  ADD KEY `id_mesa` (`id_mesa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id_mesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `reservacion`
--
ALTER TABLE `reservacion`
  MODIFY `id_reservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
