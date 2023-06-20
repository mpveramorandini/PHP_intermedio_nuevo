-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2023 a las 17:23:42
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_intermedio_mpv`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin / 20123456', 'admin123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `imagen` longblob NOT NULL,
  `descripcion` text NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `imagen`, `descripcion`, `estado`) VALUES
(30, 'Alumno', 'Dos', 0x616c756d6e6f322e6a7067, 'comentario dos', 'proceso'),
(39, 'Alumno', 'Diez', 0x616c756d6e6f332e6a7067, 'comentario 10', 'proceso'),
(55, 'alumno5', 'cinco', 0x616c756d6e6f352e6a7067, 'comentario cinco', 'finalizado'),
(56, 'alumno6', 'seis', 0x616c756d6e6f362e6a7067, 'comentario seis', 'finalizado'),
(57, 'alumno3', 'tres', 0x616c756d6e6f332e6a7067, 'comentario tres', 'finalizado'),
(89, 'alumno1', 'uno', 0x616c756d6e6f312e6a7067, 'comentario uno', 'finalizado'),
(91, 'alumno4', 'cuatro', 0x616c756d6e6f342e6a7067, 'comentario cuatro', 'finalizado'),
(92, 'alumno7', 'siete', 0x616c756d6e6f372e6a7067, 'comentario siete', 'finalizado'),
(93, 'alumno6', 'seis', 0x616c756d6e6f362e6a7067, 'comentario seis', 'finalizado'),
(94, 'alumno2', 'dos', 0x616c756d6e6f322e6a7067, 'comentario dos', 'proceso'),
(95, 'alumno8', 'ocho', 0x616c756d6e6f352e6a7067, 'comentario ocho', 'finalizado'),
(96, 'alumno1', 'uno', 0x616c756d6e6f312e6a7067, 'comentario uno', 'proceso'),
(103, 'alumno9', 'nueve', 0x616c756d6e6f352e6a7067, 'comentario nueve', 'proceso'),
(104, 'alumno 10', 'diez', 0x616c756d6e6f372e6a7067, 'comentario diez', 'proceso'),
(106, 'alumno dos', 'dos', 0x616c756d6e6f322e6a7067, 'comentario dos', 'proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`) VALUES
(1, '18123456', 'admin12'),
(2, '20123456', 'admin13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
