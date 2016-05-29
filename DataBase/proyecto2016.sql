-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2016 a las 00:16:45
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto2016`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `idAuto` int(10) UNSIGNED NOT NULL,
  `Color_CodigoColor` int(10) UNSIGNED NOT NULL,
  `Combustible_codCombustible` int(10) UNSIGNED NOT NULL,
  `Marca_codigoMarca` int(10) UNSIGNED NOT NULL,
  `Modelo_CodigoModelo` int(10) UNSIGNED NOT NULL,
  `Ano_fabricacion` int(11) DEFAULT NULL,
  `Ano_Modelo` int(11) DEFAULT NULL,
  `Numero_Motor` varchar(12) DEFAULT NULL,
  `Numero_Cilindros` int(11) DEFAULT NULL,
  `Ejes` int(11) DEFAULT NULL,
  `Asientos` int(11) DEFAULT NULL,
  `Traccion` varchar(30) DEFAULT NULL,
  `Puertas` int(11) DEFAULT NULL,
  `Peso_Seco` int(11) DEFAULT NULL,
  `Peso_Bruto` int(11) DEFAULT NULL,
  `Imagen` varchar(30) DEFAULT NULL,
  `Transmision` varchar(30) DEFAULT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`idAuto`, `Color_CodigoColor`, `Combustible_codCombustible`, `Marca_codigoMarca`, `Modelo_CodigoModelo`, `Ano_fabricacion`, `Ano_Modelo`, `Numero_Motor`, `Numero_Cilindros`, `Ejes`, `Asientos`, `Traccion`, `Puertas`, `Peso_Seco`, `Peso_Bruto`, `Imagen`, `Transmision`, `precio`, `cantidad`) VALUES
(1, 2, 1, 1, 1, 2013, 2013, '21G2763891HW', 5, 2, 5, '2X3', 5, 1875, 2377, '2.jpg', 'MECNICA', 16000, 32),
(2, 2, 2, 1, 2, 2012, 2012, '20G2263881V6', 4, 1, 4, '2X2', 4, 1972, 2578, 'img2.jpg', 'MECANICA', 18000, 25),
(3, 1, 3, 1, 1, 2013, 2013, '72658HYS3678', 4, 2, 4, '4X4', 4, 1726, 2223, '13529.jpg', 'AUTOMATICA', 18050, 18),
(4, 3, 1, 2, 4, 2015, 2015, '23HSY76YUJ8U', 4, 2, 5, '2X4', 5, 2000, 2500, '1.jpg', 'MECANICO', 18200, 15),
(5, 1, 2, 2, 5, 2016, 2016, '123G453G4576', 4, 2, 4, '2X4', 5, 2500, 3000, '2.jpg', 'AUTOMATICA', 2100, 40),
(6, 1, 1, 1, 6, 2015, 2015, '12G4563Y4752', 5, 2, 5, '4X4', 5, 3000, 3500, '2.jpg', 'MECANICO', 2500, 33),
(7, 4, 3, 4, 8, 2015, 2015, '3YDHT4ASMOXS', 6, 2, 7, '4X4', 5, 3500, 4500, '5.jpg', 'MECANICO', 28000, 14),
(8, 5, 3, 5, 9, 2014, 2014, '12DUE84H567Y', 5, 2, 7, '4X4', 5, 2100, 2670, '6.jpg', 'AUTOMATICA', 17800, 8),
(9, 1, 1, 4, 10, 2015, 2015, '72658HYS3616', 4, 2, 5, '2X4', 5, 2000, 2223, 'nissansentra.jpg', 'AUTOMATICA', 20000, 30),
(10, 1, 1, 1, 1, 2016, 2016, '123456', 10, 10, 4, '4', 4, 4, 4, '1.jpg', '4', 1500, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CodCliente` int(10) UNSIGNED NOT NULL,
  `NumeroId` int(11) DEFAULT NULL,
  `RazonSocial` varchar(30) DEFAULT NULL,
  `NomCliente` varchar(30) DEFAULT NULL,
  `ApeCliente` varchar(30) DEFAULT NULL,
  `Telef` int(11) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_has_compra_venta`
--

CREATE TABLE `cliente_has_compra_venta` (
  `Cliente_CodCliente` int(10) UNSIGNED NOT NULL,
  `Compra_Venta_idCompra_Venta` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `CodigoColor` int(10) UNSIGNED NOT NULL,
  `Des` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`CodigoColor`, `Des`) VALUES
(1, 'PLATA'),
(2, 'NEGRO'),
(3, 'ROJO'),
(4, 'NARANJA'),
(5, 'VERDE'),
(6, 'BLANCO'),
(7, 'AZUL'),
(15, 'MORADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combustible`
--

CREATE TABLE `combustible` (
  `codCombustible` int(10) UNSIGNED NOT NULL,
  `desCom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `combustible`
--

INSERT INTO `combustible` (`codCombustible`, `desCom`) VALUES
(1, 'DIESEL'),
(2, 'GASOLINA'),
(3, 'GLP'),
(4, 'DUAL'),
(5, 'GNV'),
(6, 'BIODIESEL'),
(7, 'ELECTRICIDAD'),
(8, 'METANOL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_venta`
--

CREATE TABLE `compra_venta` (
  `idCompra_Venta` int(10) UNSIGNED NOT NULL,
  `Factura_idFactura` int(10) UNSIGNED NOT NULL,
  `NombreVendedor` varchar(45) DEFAULT NULL,
  `Vendedor_codVendedor` int(10) UNSIGNED NOT NULL,
  `PrecioTran` double DEFAULT NULL,
  `igv` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idFactura` int(10) UNSIGNED NOT NULL,
  `fecha` date DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `igv` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `codigoMarca` int(10) UNSIGNED NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`codigoMarca`, `Descripcion`) VALUES
(1, 'KIA'),
(2, 'MITSUBISHI'),
(3, 'HYUNDAI'),
(4, 'NISSAN'),
(5, 'CHEVROLET'),
(6, 'VOLVO'),
(11, 'VMW');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `CodigoModelo` int(10) UNSIGNED NOT NULL,
  `Descripcion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`CodigoModelo`, `Descripcion`) VALUES
(1, 'RIO'),
(2, 'CERATO'),
(3, 'PICANTO'),
(4, 'MIRAGE'),
(5, 'LANCER'),
(6, 'SPORTAGE'),
(7, 'TUCSON'),
(8, 'JUKE'),
(9, 'SPARK'),
(10, 'SENTRA'),
(11, ' XC90'),
(17, 'YARIS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `CodTipo` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`CodTipo`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `Tipo_Usuario_CodTipo` int(10) UNSIGNED NOT NULL,
  `Nombre_Usuario` varchar(30) DEFAULT NULL,
  `Clave` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Tipo_Usuario_CodTipo`, `Nombre_Usuario`, `Clave`) VALUES
(2, 2, 'BrendaPaucar', '230313'),
(3, 1, 'Esquivel', '230313'),
(4, 2, 'ElvisE', '230313'),
(8, 1, 'osanchez', '123456'),
(13, 2, 'npereira', '123456'),
(16, 2, 'cesar', '555555');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `codVendedor` int(10) UNSIGNED NOT NULL,
  `NonVendedor` varchar(30) DEFAULT NULL,
  `ApeVendedor` varchar(30) DEFAULT NULL,
  `Telf` int(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`idAuto`),
  ADD KEY `Auto_FKIndex1` (`Modelo_CodigoModelo`),
  ADD KEY `Auto_FKIndex2` (`Marca_codigoMarca`),
  ADD KEY `Auto_FKIndex3` (`Combustible_codCombustible`),
  ADD KEY `Auto_FKIndex4` (`Color_CodigoColor`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CodCliente`);

--
-- Indices de la tabla `cliente_has_compra_venta`
--
ALTER TABLE `cliente_has_compra_venta`
  ADD PRIMARY KEY (`Cliente_CodCliente`,`Compra_Venta_idCompra_Venta`),
  ADD KEY `Cliente_has_Compra_Venta_FKIndex1` (`Cliente_CodCliente`),
  ADD KEY `Cliente_has_Compra_Venta_FKIndex2` (`Compra_Venta_idCompra_Venta`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`CodigoColor`);

--
-- Indices de la tabla `combustible`
--
ALTER TABLE `combustible`
  ADD PRIMARY KEY (`codCombustible`);

--
-- Indices de la tabla `compra_venta`
--
ALTER TABLE `compra_venta`
  ADD PRIMARY KEY (`idCompra_Venta`),
  ADD KEY `Compra_Venta_FKIndex1` (`Vendedor_codVendedor`),
  ADD KEY `Compra_Venta_FKIndex2` (`Factura_idFactura`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idFactura`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`codigoMarca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`CodigoModelo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`CodTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `Usuario_FKIndex1` (`Tipo_Usuario_CodTipo`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`codVendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `idAuto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CodCliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `CodigoColor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `combustible`
--
ALTER TABLE `combustible`
  MODIFY `codCombustible` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `compra_venta`
--
ALTER TABLE `compra_venta`
  MODIFY `idCompra_Venta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idFactura` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `codigoMarca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `CodigoModelo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `CodTipo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `codVendedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`Modelo_CodigoModelo`) REFERENCES `modelo` (`CodigoModelo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `auto_ibfk_2` FOREIGN KEY (`Marca_codigoMarca`) REFERENCES `marca` (`codigoMarca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `auto_ibfk_3` FOREIGN KEY (`Combustible_codCombustible`) REFERENCES `combustible` (`codCombustible`) ON UPDATE CASCADE,
  ADD CONSTRAINT `auto_ibfk_4` FOREIGN KEY (`Color_CodigoColor`) REFERENCES `color` (`CodigoColor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente_has_compra_venta`
--
ALTER TABLE `cliente_has_compra_venta`
  ADD CONSTRAINT `cliente_has_compra_venta_ibfk_1` FOREIGN KEY (`Cliente_CodCliente`) REFERENCES `cliente` (`CodCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cliente_has_compra_venta_ibfk_2` FOREIGN KEY (`Compra_Venta_idCompra_Venta`) REFERENCES `compra_venta` (`idCompra_Venta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra_venta`
--
ALTER TABLE `compra_venta`
  ADD CONSTRAINT `compra_venta_ibfk_1` FOREIGN KEY (`Vendedor_codVendedor`) REFERENCES `vendedor` (`codVendedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_venta_ibfk_2` FOREIGN KEY (`Factura_idFactura`) REFERENCES `factura` (`idFactura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`Tipo_Usuario_CodTipo`) REFERENCES `tipo_usuario` (`CodTipo`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
