-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2025 a las 23:14:25
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
-- Base de datos: `examen_backend_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(15) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `cedula` varchar(128) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `cedula`, `contraseña`, `correo`) VALUES
(3, 'Carlos López Martínez', '207700468', '37bffa9ced81acd31188dda0cb00ed3b7652e068fa8b654afa3bf559cb546d50', 'charlie97lm@gmail.com'),
(4, 'María Fernanda López', '7426150391', '5c367344163d104f147dc9fcbdcbc2dffe109be469692aa84e5202a8e156796d', 'maria.fernanda.lopez@example.com'),
(5, 'Carlos Andrés Jiménez', '9865302741', 'fa246d36f56684ddaab1abd4b5e2492e2bca6bf9c7d2473082f7fdc6a26e8382', 'carlos.andres.jimenez@example.com'),
(6, 'Ana Lucía Vargas', '1572984630', '02f55cbbb4da46d468c74d64e2eea66275a88af2e053dd96f6466c469f3d6474', 'ana.lucia.vargas@example.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
