-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 08:16:55
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gim`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermedades`
--

CREATE TABLE `enfermedades` (
  `IdEnfermedad` int(11) NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL,
  `IdHistorialM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `enfermedades`
--

INSERT INTO `enfermedades` (`IdEnfermedad`, `Descripcion`, `IdHistorialM`) VALUES
(10, 'Ninguna', 16),
(11, 'Ninguna', 17),
(12, 'Ninguna', 18),
(13, 'Ninguna', 19),
(15, 'Ninguna', 21),
(16, 'Ninguna', 22),
(17, 'Commotio Cordis', 23),
(18, 'Hipertencion', 24),
(19, 'Ninguna', 26),
(20, 'Ninguna', 29),
(21, 'Ninguna', 30),
(22, 'Ninguna', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `IdEstudio` int(11) NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL,
  `IdHistorialM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`IdEstudio`, `Descripcion`, `IdHistorialM`) VALUES
(14, 'Secundaria', 21),
(15, 'Secundaria', 22),
(17, 'Primaria', 19),
(18, 'Primaria', 18),
(19, 'Primaria', 17),
(20, 'Preparatoria', 16),
(21, 'Preparatoria', 23),
(22, 'Primaria', 24),
(23, 'Secundaria', 26),
(24, 'Primaria', 29),
(25, 'Universidad', 30),
(26, 'Secundaria', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `IdEvaluacion` int(11) NOT NULL,
  `Estado` int(11) DEFAULT NULL,
  `IdSolicitud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`IdEvaluacion`, `Estado`, `IdSolicitud`) VALUES
(1, 1, 1),
(2, 0, 11),
(3, 2, 1),
(4, 0, 11),
(5, 0, 13),
(6, 0, 19),
(7, 0, 20),
(8, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `color` varchar(255) NOT NULL,
  `textColor` varchar(255) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`) VALUES
(1, 'Evento 1- 8000 suscriptores', 'celebrando los 8,000 suscriptores', '#f00877', '#FFFFFF', '2018-02-06 02:44:00', '2018-02-06 02:44:00'),
(2, 'TituloEvento', 'DescripciÃ³n', '#FF0000', '#FFFFFF', '2018-03-21 10:30:00', '2018-03-21 10:30:00'),
(8, 'Evento 1', 'DescripciÃ³n del evento 1', '#0000ff', '#FFFFFF', '2018-02-15 10:30:00', '2018-02-15 10:30:00'),
(12, '-Evento 1', 'Evento 1 ', '#ff0000', '#FFFFFF', '2018-02-22 10:30:00', '2018-02-22 10:30:00'),
(0, 'Si funciona', 'Si funciona', '#000000', '#FFFFFF', '2021-06-10 04:40:00', '2021-06-10 04:40:00'),
(0, 'Reunion ', 'Fecha de reunión: \n9 de junio del 2021', '#000000', '#FFFFFF', '2021-06-18 06:40:00', '2021-06-18 06:40:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialme`
--

CREATE TABLE `historialme` (
  `IdHistorialM` int(11) NOT NULL,
  `Estatura` varchar(3) DEFAULT NULL,
  `Peso` varchar(3) DEFAULT NULL,
  `Sexo` varchar(5) DEFAULT NULL,
  `Cirugias` varchar(20) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historialme`
--

INSERT INTO `historialme` (`IdHistorialM`, `Estatura`, `Peso`, `Sexo`, `Cirugias`, `IdUsuario`) VALUES
(16, '4', '4', 'M', '', 8),
(17, '4', '4', 'M', '', 7),
(18, '4', '4', 'F', '', 6),
(19, '5', '5', 'F', '', 5),
(21, '150', '74', 'M', '', 3),
(22, '123', '123', 'F', '', 2),
(23, '180', '80', 'M', '', 9),
(24, '180', '75', 'M', 'Hernia', 10),
(25, '176', '74', 'M', '', 11),
(26, '176', '74', 'M', '', 12),
(27, '170', '70', 'M', '', 13),
(29, '165', '68', 'F', '', 14),
(30, '170', '50', 'F', '', 15),
(31, '176', '74', 'M', '', 16),
(32, '170', '74', 'M', '', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lesion`
--

CREATE TABLE `lesion` (
  `IdLesion` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `FechaLesion` date DEFAULT NULL,
  `Rehabilitacion` varchar(30) DEFAULT NULL,
  `TiempoRehabili` varchar(10) DEFAULT NULL,
  `IdHistorialM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lesion`
--

INSERT INTO `lesion` (`IdLesion`, `Nombre`, `FechaLesion`, `Rehabilitacion`, `TiempoRehabili`, `IdHistorialM`) VALUES
(6, '', '0000-00-00', '', '', 22),
(7, '', '0000-00-00', '', '', 21),
(9, '', '0000-00-00', '', '', 19),
(10, 'Hombro dislocado', '2021-03-16', '', '', 18),
(11, 'Hombro dislocado', '2021-05-06', 'Fisioterapeuta', '5', 16),
(12, 'hombro dislocado', '2021-04-29', 'Fisioterapeuta', '1', 17),
(13, 'Rodilla', '2021-05-01', 'Fisioterapeuta', '1', 23),
(14, 'Rodilla', '2021-05-06', 'Fisioterapeuta', '1dia', 24),
(15, '', '0000-00-00', '', '', 26),
(16, '', '0000-00-00', '', '', 29),
(17, 'Hombro', '2021-05-05', 'No', '0', 30),
(18, '', '0000-00-00', '', '', 31),
(19, '', '0000-00-00', '', '', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` int(11) NOT NULL,
  `descripcion` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `descripcion`) VALUES
(1, 'Entrenador'),
(2, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `IdSolicitud` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` varchar(20) DEFAULT NULL,
  `Liga` varchar(300) DEFAULT NULL,
  `Unidad` int(10) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`IdSolicitud`, `Fecha`, `Hora`, `Liga`, `Unidad`, `Estado`, `IdUsuario`) VALUES
(1, '2020-05-15', '15:20:00', 'liga meet', 3, 1, 2),
(3, '2021-06-09', '11:02', 'meet.google.com/wsf-rfuy-kxy', 3, 1, 3),
(5, NULL, NULL, NULL, 3, 0, 6),
(7, NULL, NULL, NULL, 4, 0, 7),
(8, NULL, NULL, NULL, 3, 0, 8),
(11, '2021-05-22', '05:09', 'www.google.com', 3, 1, 10),
(13, '2021-05-21', '00:06', 'www.google.com', 3, 1, 9),
(18, NULL, NULL, NULL, 3, 0, 15),
(19, '2021-05-30', '17:00', 'meet.google.com/wsf-rfuy-kxy', 3, 1, 17),
(20, '2021-06-09', '17:00', 'meet.google.com/wsf-rfuy-kxy', 4, 1, 9),
(21, NULL, NULL, NULL, 5, 0, 9);

--
-- Disparadores `solicitud`
--
DELIMITER $$
CREATE TRIGGER `Evaluar` AFTER UPDATE ON `solicitud` FOR EACH ROW IF (new.Estado = 1)
       THEN
        INSERT INTO evaluacion (Estado,IdSolicitud) values ( 0,new.IdSolicitud);
    END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `IdTutor` int(11) NOT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `ApelidoP` varchar(10) DEFAULT NULL,
  `ApellidoM` varchar(10) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Email` varchar(31) DEFAULT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Parentesco` varchar(20) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`IdTutor`, `Nombre`, `ApelidoP`, `ApellidoM`, `FechaNacimiento`, `Email`, `Telefono`, `Parentesco`, `IdUsuario`) VALUES
(2, 'Alejandro', 'Garcia', 'asd', '2021-05-01', 'alexwolfs997@gmail.com', 2147483647, '88', 5),
(3, 'Alejandro', 'Garcia', 'e', '2021-05-01', 'alexwolfs997@gmail.com', 2147483647, 'aa', 6),
(4, 'asd', 'asd', 'asd', '2021-05-01', 'asdtt@tutor.com', 1234567898, '5', 2),
(5, 'asd', 'asd', 'asd', '2021-04-30', 'asd@hot.com', 654654654, 'aa', 7),
(6, 'Pedro', 'lopez', 'Garcia', '1984-01-11', 'pedro@hotmail.com', 2147483647, 'papa', 8),
(7, 'Pedro', 'lopez', 'Garcia', '2021-04-30', 'andres@alumno.com', 2147483647, 'papa', 9),
(8, 'asd', 'wer', 'hgj', '2021-04-30', 'al@hotmail.com', 2147483647, 'madre', 10),
(9, 'Alejandro', 'Lopez', 'Rodriguez', '1963-12-28', 'alex@hotmail.com', 2147483647, 'Padre', 12),
(10, 'Pedro', 'lopez', 'Rodriguez', '2019-01-23', 'andres@alumno.com', 2147483647, 'Padre', 14),
(11, 'Alejandro', 'L', 'G', '2021-05-04', 'alejandro@hotmail.com', 2147483647, 'Padre', 15),
(12, 'Alejandro', 'L', 'G', '2021-05-05', 'alejandro@hotmail.com', 2147483647, 'Padre', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(15) DEFAULT NULL,
  `ApellidoP` varchar(10) DEFAULT NULL,
  `ApellidoM` varchar(10) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL,
  `Email` varchar(31) DEFAULT NULL,
  `Clave` char(60) DEFAULT NULL,
  `Ciudad` varchar(20) DEFAULT NULL,
  `Asociacion` varchar(30) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `IdRol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `ApellidoP`, `ApellidoM`, `FechaNacimiento`, `Email`, `Clave`, `Ciudad`, `Asociacion`, `Direccion`, `IdRol`) VALUES
(2, 'Adolfo', 'Macedo', 'Cordero', '2005-04-01', 'adolfo@hotmail.com', '$2y$10$Gmg3YnmUPWsb7OzPR8woqOrmRjxSrVXqMf2wX93eNo11/t12auJwK', 'Tijuana', '', 'Tijuana B.C.', 2),
(3, 'Gibran', 'Madera', 'Guerrero', '2008-04-01', 'gibran@hotmail.com', '$2y$10$2oWst2wzcqwHImLyOLIWQOz8Et1P0P1/aVa.QRJpwcNJ/MB.t6x0u', 'Tijuana', '', 'Tijuana B.C.', 2),
(5, 'Carlos', 'Aramburo', 'Ramirez', '2010-04-03', 'carlos@hotmail.com', '$2y$10$WZDySvgmT1cbbaXMWzrvA.MR4VRVPTWKX7rkz9bb2hpHWfptg3AXS', 'Tijuana ', '', 'Tijuana B.C.', 2),
(6, 'Jose', 'Gerardo', 'Ramirez', '2010-06-03', 'jose@hotmail.com', '$2y$10$JydLTlYx827Il7aaXWQZh.aAYwTK5NZ9SG1SNJNBrJUa8ewpOtXja', 'Tijuana ', '', 'Tijuana B.C.', 2),
(7, 'Elius', 'Castro', 'Lopez', '1987-02-01', 'am@maestro.com', '$2y$10$xdRIiGtFpFrwvCu6L6vctuDWak/0jpDWluAinh3rjtYJpPcZhM0mK', 'Tijuana ', 'CAR', 'Tijuana B.C.', 1),
(8, 'Sergio', 'Aramburo', 'Ramirez', '2009-08-01', 'sergio@hotmail.com', '$2y$10$ZOso2.e4aK2GcRYRJv11ie6Qj65o5JQL6xMO1Ti.nCV21WXHpXj3K', 'Tijuana ', '', 'Tijuana B.C.', 2),
(9, 'Andres', 'Perez', 'Cordero', '2009-04-30', 'andres@hotmail.com', '$2y$10$eMD6pBReEX.BRct/N8jwiOPw.gla4ay.mwJZ4H5RWQ.Ic4Chl.cfS', 'Tijuana ', '', 'Tijuana B.C.', 2),
(10, 'Jesus', 'Gonzalez', 'Gonzalez', '2011-01-09', 'jesus@hotmail.com', '$2y$10$zvMW39/7d6W7OtbrsyyynuB27mp.TflMYqyK4HgFw4x6SQhCXbJqW', 'Tijuana ', '', 'Tijuana B.C.', 2),
(11, 'Bryan', 'Lopez', 'Garcia', '2009-03-09', 'bryan@hotmail.com', '$2y$10$hgCJdnHBpC0uqebocOIOwuvEjG19.jXesHOdiKfvc1gM.W1xqJHJG', 'Tijuana', '', 'Rosarito B.C.', 2),
(12, 'Angel', 'Lopez', 'Garcia', '2012-03-23', 'angel@hotmail.com', '$2y$10$ZAUrdAbqUplU6G1CXph6v..vM86.3DuxGlnQF5I14LYl25rYW/C6.', 'Tijuana', '', 'Tijuana B.C.', 2),
(13, 'Ethan', 'Lopez', 'Garcia', '2009-09-03', 'ethan@hotmail.com', '$2y$10$rValYPAyTMylVzvmcXz1EuOwEvNgvlEYbA0P0aYiiJL7dim.HMtLG', 'Tijuana', '', 'Tijuana B.C.', 2),
(14, 'Yadira', 'Madera', 'Macedo', '2010-01-04', 'yadira@hotmail.com', '$2y$10$Miy3tJiGAP1jyFEt5NiXfeXEGtYFt8dceHclvVnvEA3dMmdZq4SfS', 'Tijuana', '', 'Tijuana B.C.', 2),
(15, 'Maria', 'Blanco', 'Negro', '2012-02-14', 'maria@hotmail.com', '$2y$10$7qg52wpNfhSTY4JzeeRaO.BZDQxfnyl4S.h2uiXioXBS/zojNLOee', 'Tijuana', '', 'Tijuana B.C.', 2),
(16, 'Alejandro', 'Lopez', 'Garcia', '2010-01-10', 'alex@hotmail.com', '$2y$10$/5gMtdNvmFijm.yJ6A1Jq..p/ooS71oQ5HOADhLltv49vFZCNPUK2', 'Tijuana', '', 'Tijuana B.C.', 2),
(17, 'Ulises', 'Victorio', 'Garcia', '2009-01-06', 'ulises@hotmail.com', '$2y$10$N7uJusmPneO/pXCRQHtMCuMSUJcxHV4qmur04xmMFLxc043ctBzom', 'Tijuana', '', 'Tijuana B.C.', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`IdEnfermedad`),
  ADD KEY `IdHistorialM` (`IdHistorialM`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`IdEstudio`),
  ADD KEY `IdHistorialM` (`IdHistorialM`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`IdEvaluacion`),
  ADD KEY `fk_idsolicitud` (`IdSolicitud`);

--
-- Indices de la tabla `historialme`
--
ALTER TABLE `historialme`
  ADD PRIMARY KEY (`IdHistorialM`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `lesion`
--
ALTER TABLE `lesion`
  ADD PRIMARY KEY (`IdLesion`),
  ADD KEY `IdHistorialM` (`IdHistorialM`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`IdSolicitud`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`IdTutor`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `IdRol` (`IdRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  MODIFY `IdEnfermedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `IdEstudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `IdEvaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `historialme`
--
ALTER TABLE `historialme`
  MODIFY `IdHistorialM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `lesion`
--
ALTER TABLE `lesion`
  MODIFY `IdLesion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `IdSolicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `IdTutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD CONSTRAINT `enfermedades_ibfk_1` FOREIGN KEY (`IdHistorialM`) REFERENCES `historialme` (`IdHistorialM`);

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `estudio_ibfk_1` FOREIGN KEY (`IdHistorialM`) REFERENCES `historialme` (`IdHistorialM`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `fk_idsolicitud` FOREIGN KEY (`IdSolicitud`) REFERENCES `solicitud` (`IdSolicitud`);

--
-- Filtros para la tabla `historialme`
--
ALTER TABLE `historialme`
  ADD CONSTRAINT `historialme_ibfk_3` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `lesion`
--
ALTER TABLE `lesion`
  ADD CONSTRAINT `lesion_ibfk_1` FOREIGN KEY (`IdHistorialM`) REFERENCES `historialme` (`IdHistorialM`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuario` (`IdUsuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
