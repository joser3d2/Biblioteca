-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 22:41:22
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
-- Base de datos: `bdliberia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idautor`, `nombre`, `apellido`) VALUES
(1, 'J. K.', 'Rowling1'),
(2, 'Rick', 'Riordan'),
(3, 'Helmut', 'Esquivel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorialibro`
--

CREATE TABLE `categorialibro` (
  `idCat` int(11) NOT NULL,
  `descripcionCat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorialibro`
--

INSERT INTO `categorialibro` (`idCat`, `descripcionCat`) VALUES
(1, 'Terror'),
(2, 'Ficción'),
(3, 'Aventura'),
(4, 'Accion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallelib`
--

CREATE TABLE `detallelib` (
  `fklibro` int(11) NOT NULL,
  `fkEst` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `fkEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleprestamo`
--

CREATE TABLE `detalleprestamo` (
  `fkPress` int(11) NOT NULL,
  `fklibro` int(11) NOT NULL,
  `estado_idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmp` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(5) NOT NULL,
  `dpi` varchar(45) NOT NULL,
  `fkEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmp`, `nombre`, `apellido`, `telefono`, `direccion`, `rol`, `dpi`, `fkEstado`) VALUES
(1, 'Helmut', 'Esquivel', '55661811', '3 Ave 9-33 Zona 5 Villa Nueva', 'a', '2642371450101', 2),
(2, 'Estuardo', 'Fernandez', '12345678', '3 Ave 9-33 Zona 5 Villa Nueva', 'e', '2642371450101', 2),
(4, 'Jessica', 'Alpirez', '12345678', '5ta Ave A 3-77', 'e', '2642371450101', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
(1, 'Deshabilitada'),
(2, 'Habilitado'),
(3, 'Prestado'),
(4, 'Devuelto'),
(5, 'Suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estanteria`
--

CREATE TABLE `estanteria` (
  `idEst` int(11) NOT NULL,
  `ubicacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `estanteria`
--

INSERT INTO `estanteria` (`idEst`, `ubicacion`) VALUES
(1, 'Aventura Estant'),
(2, 'Accion Estan2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLib` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcionLib` varchar(255) NOT NULL,
  `edicion` varchar(25) NOT NULL,
  `tomo` varchar(25) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `fkautor` int(11) NOT NULL,
  `fkCat` int(11) NOT NULL,
  `fkEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `idPres` int(11) NOT NULL,
  `fechaPrestamo` date NOT NULL,
  `fechaDevolucion` date NOT NULL,
  `fkusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fkEmp` int(11) NOT NULL,
  `fkEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idautor`);

--
-- Indices de la tabla `categorialibro`
--
ALTER TABLE `categorialibro`
  ADD PRIMARY KEY (`idCat`);

--
-- Indices de la tabla `detallelib`
--
ALTER TABLE `detallelib`
  ADD KEY `fk_detallePrestamo_libro_idx` (`fklibro`),
  ADD KEY `fk_detalleLib_estanteria1_idx` (`fkEst`),
  ADD KEY `fk_detalleLib_estado1_idx` (`fkEstado`);

--
-- Indices de la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD KEY `fk_detallePrestamo_prestamo1_idx` (`fkPress`),
  ADD KEY `fk_detallePrestamo_libro1_idx` (`fklibro`),
  ADD KEY `fk_detallePrestamo_estado1_idx` (`estado_idEstado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmp`),
  ADD KEY `fk_empleado_estado1_idx` (`fkEstado`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `estanteria`
--
ALTER TABLE `estanteria`
  ADD PRIMARY KEY (`idEst`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLib`),
  ADD KEY `fk_libro_autor1_idx` (`fkautor`),
  ADD KEY `fk_libro_categorialibro1_idx` (`fkCat`),
  ADD KEY `fk_libro_estado1_idx` (`fkEstado`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`idPres`),
  ADD KEY `fk_prestamo_usuario1_idx` (`fkusuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_usuario_empleado1_idx` (`fkEmp`),
  ADD KEY `fk_usuario_estado1_idx` (`fkEstado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `idautor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorialibro`
--
ALTER TABLE `categorialibro`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estanteria`
--
ALTER TABLE `estanteria`
  MODIFY `idEst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idLib` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `idPres` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallelib`
--
ALTER TABLE `detallelib`
  ADD CONSTRAINT `fk_detalleLib_estado1` FOREIGN KEY (`fkEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalleLib_estanteria1` FOREIGN KEY (`fkEst`) REFERENCES `estanteria` (`idEst`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detallePrestamo_libro` FOREIGN KEY (`fklibro`) REFERENCES `libro` (`idLib`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD CONSTRAINT `fk_detallePrestamo_estado1` FOREIGN KEY (`estado_idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detallePrestamo_libro1` FOREIGN KEY (`fklibro`) REFERENCES `libro` (`idLib`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detallePrestamo_prestamo1` FOREIGN KEY (`fkPress`) REFERENCES `prestamo` (`idPres`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_estado1` FOREIGN KEY (`fkEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_libro_autor1` FOREIGN KEY (`fkautor`) REFERENCES `autor` (`idautor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libro_categorialibro1` FOREIGN KEY (`fkCat`) REFERENCES `categorialibro` (`idCat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_libro_estado1` FOREIGN KEY (`fkEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_usuario1` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_empleado1` FOREIGN KEY (`fkEmp`) REFERENCES `empleado` (`idEmp`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_estado1` FOREIGN KEY (`fkEstado`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
