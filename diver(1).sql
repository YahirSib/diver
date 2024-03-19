-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2024 a las 20:56:57
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
-- Base de datos: `diver`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregar_usuario` (IN `nombre` VARCHAR(50) CHARSET utf8mb4, IN `apellido` VARCHAR(50) CHARSET utf8mb4, IN `contrasena` VARCHAR(200) CHARSET utf8mb4, IN `username` VARCHAR(40) CHARSET utf8mb4, IN `correo` VARCHAR(100) CHARSET utf8mb4, IN `rol` VARCHAR(20) CHARSET utf8mb4)   IF (SELECT COUNT(u.username) as "CANT" FROM usuarios u WHERE u.username = username) > 0 THEN
	SELECT u.username FROM usuarios u WHERE u.username = username;
ELSE 
	INSERT INTO usuarios (`nombre`, `apellido`, `contrasena`, `username`, `correo`, `rol`)
	VALUES(nombre,apellido,contrasena,username,correo,rol);
END IF$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_usuario` (IN `val` VARCHAR(40) CHARSET utf8mb4)   SELECT u.nombre, u.apellido, u.correo, u.rol FROM usuarios u WHERE (u.nombre LIKE CONCAT('%', val, '%') OR u.username LIKE CONCAT('%', val, '%')) LIMIT 10$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `editar_usuario` (IN `id` INT, IN `nombre` VARCHAR(40) CHARSET utf8mb4, IN `apellido` VARCHAR(40) CHARSET utf8mb4, IN `username` VARCHAR(50) CHARSET utf8mb4, IN `correo` VARCHAR(200) CHARSET utf8mb4, IN `rol` VARCHAR(20) CHARSET utf8mb4)   UPDATE usuarios U SET U.nombre= nombre, 
U.apellido= apellido, 
U.username= username, 
U.correo= correo,
U.rol = rol WHERE U.id = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `username` VARCHAR(40) CHARSET utf8mb4)   SELECT * FROM usuarios u WHERE u.username = username$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creditos`
--

CREATE TABLE `creditos` (
  `id` int(11) NOT NULL,
  `n_credito` varchar(30) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `emitido_a` varchar(40) DEFAULT NULL,
  `recibido_de` varchar(40) DEFAULT NULL,
  `correo` varchar(60) NOT NULL,
  `monto` decimal(19,2) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `documento` varchar(50) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `estado` int(1) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `creditos`
--

INSERT INTO `creditos` (`id`, `n_credito`, `tipo`, `emitido_a`, `recibido_de`, `correo`, `monto`, `tipo_doc`, `documento`, `descripcion`, `estado`, `fecha`) VALUES
(1, 'FAC-3344', 'emitido', 'Nombre Apellido', NULL, 'correo@gmail.com', 1500.00, 'Fisico', 'id_10203.jpg', 'Instalación de Aire Plaza Mundo.', 0, '2024-03-17'),
(2, 'FAC-3344', 'recibido', NULL, 'VIDRI', 'correo@gmail.com', 100.00, 'DTE', 'id_02020.json', 'Compra material', 0, '2024-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `contrasena` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `contrasena`, `username`, `correo`, `rol`) VALUES
(2, 'Yahir Stewart', 'Sibrian Arriola', '$2y$10$kMBLoQYO6EnsMfjTZAiJcuVa4dYVXtBhVBK8RNTSNoowM/0Tb82yC', 'yahir.sibrian', 'yahirstewart16@gmail.com', 'Administrador'),
(70, 'David', 'Sibrian Cortez', '$2y$10$hFRjffg5aC94/rOHFdDCR.vqXdxSFcIclA6QjVpiN1ssE..eUtCL.', 'david.sibrian', 'david@gmail.com', 'Consultor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `creditos`
--
ALTER TABLE `creditos`
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
-- AUTO_INCREMENT de la tabla `creditos`
--
ALTER TABLE `creditos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
