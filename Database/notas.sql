-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2020 a las 02:31:49
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `ID_ASIGNATURA` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`ID_ASIGNATURA`, `NOMBRE`) VALUES
(1, 'Trigonometria'),
(2, 'Calculo'),
(3, 'Matematicas basicas'),
(4, 'Español'),
(5, 'Ciencia Politicas'),
(6, 'Ciencias Sociales'),
(7, 'Filosofia'),
(8, 'Educacion Fisica'),
(9, 'Musica'),
(10, 'Danzas'),
(11, 'Informatica'),
(12, 'Electronica'),
(13, 'Diseño'),
(14, 'Ingles'),
(15, 'Ciencias Naturales'),
(16, 'Fisica'),
(17, 'Quimica'),
(18, 'Religion'),
(19, 'Catedra para la paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID_CURSO` int(11) NOT NULL,
  `CURSO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID_CURSO`, `CURSO`) VALUES
(1, '601 JM'),
(2, '602 JM'),
(3, '603 JM'),
(4, '604 JM'),
(5, '701 JM'),
(6, '702 JM'),
(7, '703 JM'),
(8, '801 JM'),
(9, '802 JM'),
(10, '803 JM'),
(11, '804 JM'),
(12, '901 JM'),
(13, '902 JM'),
(14, '903 JM'),
(15, '1001 JM'),
(16, '1002 JM'),
(17, '1003 JM'),
(18, '1101 JM'),
(19, '1102 JM'),
(20, '1103 JM'),
(21, '1104 JM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `ID_DOCENTE` int(11) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `CLAVE` varchar(20) NOT NULL,
  `NOMBRES` varchar(100) NOT NULL,
  `APELLIDOS` varchar(100) NOT NULL,
  `TELEFONO` varchar(50) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `ESTADO` varchar(20) NOT NULL,
  `ID_PERFIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`ID_DOCENTE`, `USUARIO`, `CLAVE`, `NOMBRES`, `APELLIDOS`, `TELEFONO`, `CORREO`, `ESTADO`, `ID_PERFIL`) VALUES
(1, 'GloriaM', '321', 'Gloria Maria', 'Vargas', '5555555', 'gloria@gmail.com', 'Activo', 3),
(2, 'Liliana', '8366771', 'Liliana', 'Pulido', '5555555', 'liliana@gmail.com', 'Activo', 1),
(3, 'OswaldoS', '2288807', 'Oswaldo', 'Siado', '523652563', 'oswaldo@gmail.com', 'Activo', 1),
(4, 'YanethH', '10092234', 'Yaneth', 'Huerta', '3226548541', 'yaneth@yahoo.com', 'Activo', 1),
(5, 'FredyM', '10701155', 'Fredy', 'Moreno', '63251458', 'fredy@gmail.com', 'Activo', 1),
(6, 'ElsaG', '5045453', 'Elsa', 'Guataqui', '3256541214', 'elsa@gmail.com', 'Activo', 1),
(7, 'MarthaA', '1060991', 'Martha', 'Arbelaes', '3625147896', 'martha@hotmail.com', 'Activo', 1),
(8, 'AvelinoP', '10949909', 'Avelino', 'Piñeros', '3221452659', 'Avelino@yahoo.com', 'Activo', 1),
(9, 'RuthL', '6565920', 'Ruth', 'Londoño', '3221252656', 'ruth@gmail.com', 'Activo', 2),
(10, 'MarthaC', '9200131', 'Martha', 'Ceron', '3225689652', 'marthaC@hotmail.com', 'Activo', 1),
(11, 'EdithO', '2755107', 'Edith', 'Osorio', '3226514515', 'edith@yahoo.com', 'Activo', 1),
(12, 'MagalizP', '8109943', 'Magaliz', 'Palacios', '654212222', 'magaliz@hotmail.com', 'Activo', 1),
(14, 'FredyG', '12173186', 'Fredy', 'Galvis', '3225416251', 'fredy@outlook.com', 'Activo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `NOMBRES` varchar(80) NOT NULL,
  `APELLIDOS` varchar(80) NOT NULL,
  `CORREO` varchar(100) NOT NULL,
  `TELEFONO` varchar(50) DEFAULT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `ID_CURSO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`ID_ESTUDIANTE`, `NOMBRES`, `APELLIDOS`, `CORREO`, `TELEFONO`, `FECHA_NACIMIENTO`, `ID_CURSO`) VALUES
(1, 'Luisa', 'Daza', 'luisa@outlock.com', '322514789', '2020-10-15', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ID_NOTA` int(11) NOT NULL,
  `ID_DOCENTE` int(11) NOT NULL,
  `ID_ESTUDIANTE` int(11) NOT NULL,
  `ID_ASIGNATURA` int(11) NOT NULL,
  `NOTA1` decimal(18,2) DEFAULT NULL,
  `NOTA2` decimal(18,2) DEFAULT NULL,
  `NOTA3` decimal(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`ID_NOTA`, `ID_DOCENTE`, `ID_ESTUDIANTE`, `ID_ASIGNATURA`, `NOTA1`, `NOTA2`, `NOTA3`) VALUES
(1, 1, 1, 2, '3.00', '4.00', '2.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `ID_PERFIL` int(11) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`ID_PERFIL`, `NOMBRE`) VALUES
(1, 'Docente'),
(2, 'Coordinador'),
(3, 'Rectora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`ID_ASIGNATURA`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ID_DOCENTE`),
  ADD KEY `fk_usuario_perfil` (`ID_PERFIL`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`),
  ADD KEY `fk_estudiante_curso` (`ID_CURSO`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`ID_NOTA`),
  ADD KEY `fk_nota_asignatura` (`ID_ASIGNATURA`),
  ADD KEY `fk_nota_docente` (`ID_DOCENTE`),
  ADD KEY `fk_nota_estudiante` (`ID_ESTUDIANTE`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`ID_PERFIL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `ID_ASIGNATURA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `ID_DOCENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `ID_ESTUDIANTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `ID_NOTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `ID_PERFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`ID_PERFIL`) REFERENCES `perfil` (`ID_PERFIL`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiante_curso` FOREIGN KEY (`ID_CURSO`) REFERENCES `cursos` (`ID_CURSO`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_nota_asignatura` FOREIGN KEY (`ID_ASIGNATURA`) REFERENCES `asignatura` (`ID_ASIGNATURA`),
  ADD CONSTRAINT `fk_nota_docente` FOREIGN KEY (`ID_DOCENTE`) REFERENCES `docentes` (`ID_DOCENTE`),
  ADD CONSTRAINT `fk_nota_estudiante` FOREIGN KEY (`ID_ESTUDIANTE`) REFERENCES `estudiantes` (`ID_ESTUDIANTE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
