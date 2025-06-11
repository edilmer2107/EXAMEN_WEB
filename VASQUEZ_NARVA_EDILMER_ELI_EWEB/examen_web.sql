-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2025 a las 19:40:40
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
-- Base de datos: `examen_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `linea_investi` varchar(120) NOT NULL,
  `resumen` varchar(300) NOT NULL,
  `objetivos` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_tesista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id`, `titulo`, `linea_investi`, `resumen`, `objetivos`, `fecha_inicio`, `fecha_fin`, `estado`, `fecha_creado`, `id_tesista`) VALUES
(1, 'Tesis1', 'Gestion TI', 'Trabaja en la investigacion sobre la gestion.', 'Obtener una buena investigacion', '2024-06-03', '2025-06-03', 1, '2025-06-11 15:37:31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesista`
--

CREATE TABLE `tesista` (
  `id` int(11) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `nombres` varchar(120) NOT NULL,
  `dni` int(8) NOT NULL,
  `escuprof` varchar(120) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tesista`
--

INSERT INTO `tesista` (`id`, `apellidos`, `nombres`, `dni`, `escuprof`, `estado`, `fecha_creacion`) VALUES
(1, 'Vasquez', 'Edil', 71968036, 'Ing. de sistemas', 1, '2025-06-11 15:37:15'),
(2, 'Nuñez', 'Billy', 71529007, 'Ig. de sistemas', 1, '2025-06-11 15:37:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tesista` (`id_tesista`);

--
-- Indices de la tabla `tesista`
--
ALTER TABLE `tesista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tesista`
--
ALTER TABLE `tesista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `FK_Tesista_tesis` FOREIGN KEY (`id_tesista`) REFERENCES `tesista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
