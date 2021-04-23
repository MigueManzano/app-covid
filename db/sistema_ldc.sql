-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2021 a las 00:44:56
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_ldc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `IdCita` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdMedico` int(11) NOT NULL,
  `FechaCita` date NOT NULL,
  `IdHorario` int(11) NOT NULL,
  `CodigoCita` int(11) NOT NULL,
  `FechaCreacion` int(11) NOT NULL,
  `Estatus` char(1) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentarios` (
  `IdComentario` int(11) NOT NULL,
  `Id_usuario` int(11) NOT NULL,
  `IdPublic` int(11) NOT NULL,
  `Descripcion` text NOT NULL,
  `FechaComent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentarios` (`IDComentario`, `Id_usuario`, `IdPublic`, `Descripcion`, `FechaComent`) VALUES
(1, 1, 1, 'cual farmacia dices', '2021-03-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `IdCuestion` int(11) NOT NULL,
  `Idusuario` int(11) NOT NULL,
  `Pregunta1Cuestion` int(11) NOT NULL,
  `Pregunta2Cuestion` int(11) NOT NULL,
  `Pregunta3Cuestion` int(11) NOT NULL,
  `Pregunta4Cuestion` varchar(100) NOT NULL,
  `Pregunta5Cuestion` int(11) NOT NULL,
  `FechaSintomas` date NOT NULL,
  `Pregunta6Cuestion` int(11) NOT NULL,
  `Pregunta7Cuestion` int(11) NOT NULL,
  `Pregunta8Cuestion` int(11) NOT NULL,
  `Pregunta9Cuestion` int(11) NOT NULL,
  `Pregunta10Cuestion` int(11) NOT NULL,
  `PorcentajeCuestion` int(11) NOT NULL,/*???*/
  `FechaCuestion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares`
--

CREATE TABLE `lugares` (
  `IdLugar` int(11) NOT NULL,
  `NombreLugar` varchar(100) NOT NULL,
  `DescripcionLugar` text NOT NULL,
  `DireccionLugar` varchar(200) NOT NULL,
  `FechaLugar` date NOT NULL,
  `ImagenLugar` varchar(100) NOT NULL,/*varchar??*/
  `NumeroLugar` int(15) NOT NULL,
  `CorreoLugar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lugares`
--

INSERT INTO `lugares` (`IDLugar`, `NombreLugar`, `DescripcionLugar`, `DireccionLugar`, `FechaLugar`, `ImagenLugar`, `NumeroLugar`, `CorreoLugar`) VALUES
(1, 'hospital el quemado', 'se hacen pruebas de covid de 9 de la mañana a las 9 de la noche', 'puerto marquez', '2021-03-08', 'dsñsfdsjsfrrfe', 744410256, 'elquemado@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `IdPruebas` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `NombrePrueba` varchar(100) NOT NULL,
  `DescripPrueba` varchar(100) NOT NULL,
  `ImagenPrueba` varchar(100) NOT NULL,
  `FechaPrueba` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`IDPruebas`, `UserID`, `NombrePrueba`, `DescripPrueba`, `ImagenPrueba`, `FechaPrueba`) VALUES
(1, 1, '', 'prueba del covid', 'sadfvcddff', '2021-03-15 11:36:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicaciones` (
  `IdPublic` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `DescriPublic` text NOT NULL,
  `FechaPublic` date NOT NULL,
  `ImagePublic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`IDPublic`, `IDUser`, `DescriPublic`, `FechaPublic`, `ImagePublic`) VALUES
(1, 1, 'se vende mascarillas en la farmacia de Guadalajara', '2021-03-22', 'wegvdfdsdfv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `IDRol` int(11) NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`IDRol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Usuario'),
(3, 'Medico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuarios` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contra` varchar(100) NOT NULL,
  `Curp` varchar(20) NOT NULL,
  `Domicilio` varchar(200) NOT NULL,
  `Foto` varchar(100) NOT NULL,/**Foto???*/
  `FechaNacimiento` date NOT NULL,
  `Celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*estructura de la tabla medicos*/

CREATE TABLE `medicos` (
  `Idmedico` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Contra` varchar(100) NOT NULL,
  `Curp` varchar(20) NOT NULL,
  `Domicilio` varchar(200) NOT NULL,
  `Foto` varchar(100) NOT NULL,/**Foto???*/
  `FechaNacimiento` date NOT NULL,
  `Celular` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
---catalogo de horarios
CREATE TABLE `horarioscat` (
  `IdHorario` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `horarioscat` (`idHorario`, `descripcion`) VALUES("", "08:00 - 10:00"),
  ("", "10:00 - 12:00"),
  ("", "01:00 - 03:00"),
  ("", "03:00 - 05:00"),
  ("", "05:00 - 07:00"),
  ("", "07:00 - 08:00")
--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IDUser`, `TipoIDUser`, `NombreUser`, `ApellidosUser`, `CorreoUser`, `ContraUser`, `CurpUser`, `DomicilioUser`, `FotoUser`, `FechaNaciUser`, `CelulaUser`) VALUES
(1, 1, 'Alex Irving', 'de los Santos Diaz', 'alexmigo16@gmail.com', 'A1l9e9x7', 'SADA911979GHNRLZ20', 'calle naranjos, colonia alta icacos', 'dfgffddf', '2020-11-02', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IDCitas`),
  ADD KEY `IDUsu` (`IDUsu`),
  ADD KEY `IDMedico` (`IDMedico`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`IDComentario`),
  ADD KEY `ID_User` (`ID_User`),
  ADD KEY `IDPublic` (`IDPublic`);

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`IDCuestion`),
  ADD KEY `IDusuario` (`IDusuario`);

--
-- Indices de la tabla `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`IDLugar`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`IDPruebas`),
  ADD KEY `UserID` (`UserID`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`IDPublic`),
  ADD KEY `IDUser` (`IDUser`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`IDRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IDUser`),
  ADD UNIQUE KEY `CorreoUser` (`CorreoUser`),
  ADD UNIQUE KEY `CurpUser` (`CurpUser`),
  ADD UNIQUE KEY `CelulaUser` (`CelulaUser`),
  ADD KEY `TipoIDUser` (`TipoIDUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IDCitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `IDComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `IDCuestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lugares`
--
ALTER TABLE `lugares`
  MODIFY `IDLugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `IDPruebas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `IDPublic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `IDRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`IDUsu`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`IDMedico`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`IDPublic`) REFERENCES `publicacion` (`IDPublic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD CONSTRAINT `cuestionario_ibfk_1` FOREIGN KEY (`IDusuario`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD CONSTRAINT `pruebas_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `usuarios` (`IDUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`TipoIDUser`) REFERENCES `roles` (`IDRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
