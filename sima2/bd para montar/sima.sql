-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2021 a las 03:07:56
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sima`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `datosGraficos` ()  select * from producto$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` bigint(14) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`, `email`) VALUES
(342344, 'luis samuel', 'cardenas', 321444444, 'cra 27 87 38', 'rolues2345@outlook.es'),
(354234, 'marinela', 'gonzales', 31039454, 'cll 24 35 87', 'marigo12@outlook.com'),
(1234789, 'johana', 'arbelaez', 3245324, 'cll 34 n 12 45', 'joarb34@yahoo.es'),
(1461817, 'diego', 'quintero', 9655616, 'crajsd', 'diego@jj.com'),
(2345743, 'jose ricardo', 'zapata', 8765943, 'calle 67 n', 'josricam45@gmailc.om'),
(3465689, 'claudia patricia ', 'camacho', 31245687, 'cra 14 n 2', 'clauspa23@htmail.com'),
(9864364, 'manuel', 'acevedo', 3245623, 'cll 12 n 76 89', 'acevedomanu456@hotmail.com'),
(10254356, 'gabriel', 'sanabria', 3252145, 'ggdgd', 'gdaga@gmail.com'),
(24356789, 'jose gabriel', 'zapata', 3214534, 'cra 54 12 34', 'jgabi34@outlook.com'),
(30876545, 'daniel fernando', 'ricaute', 435623, 'cra 25 76 87', 'rifeda34@gmail.com'),
(45783948, 'santiago', 'rodriguez', 3234563, 'cra 21 34 56', 'sanro2021@gmail.com'),
(98384843, 'dayana', 'rios', 8943245, 'cll 45 87 56', 'daylove@gmail.com'),
(254535652, 'laura', 'lara', 3105864856, 'cra4 3-25', 'lau@hotmail.com'),
(259633147, 'yesica', 'cediell', 320565897, 'km5 centenario', 'yesi.ca@hotmail.com'),
(336400656, 'juan', 'puerto', 312525555, 'cra23233', 'juan.puerto@hotmail.com'),
(1057583873, 'HEMERSON', 'FLOREZ', 3105840010, 'Carrera 4#5-38,SOGAM', 'hemersonflorez@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(20) NOT NULL,
  `nombre_empleado` varchar(50) NOT NULL,
  `apellido_empleado` varchar(50) NOT NULL,
  `telefono_empleado` bigint(14) NOT NULL,
  `direccion_empleado` varchar(30) NOT NULL,
  `email_empleado` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cargo_empleado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_empleado`, `apellido_empleado`, `telefono_empleado`, `direccion_empleado`, `email_empleado`, `password`, `cargo_empleado`) VALUES
(12032154, 'andres', 'estepa', 32025468, 'bogota', 'diego@gmail.com', 'vendedor', 'vendedor'),
(1057583873, 'HEMERSON', 'FLOREZ', 3105840010, 'Carrera 4#5-38,El Carmen de Ch', 'hemersonflorez@gmail.com', 'xyn47c', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(50) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `Marca_Prod_ped` varchar(50) NOT NULL,
  `id_prov_ped` int(50) NOT NULL,
  `Cant_Prod_ped` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `fecha_pedido`, `Marca_Prod_ped`, `id_prov_ped`, `Cant_Prod_ped`) VALUES
(2, '2021-07-01', 'levis', 3213245, 21),
(3, '2021-07-15', 'diesel', 2345352, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id` bigint(20) NOT NULL,
  `id_producto_pedido` int(20) NOT NULL,
  `id_pedido` int(50) NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_item` int(20) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `id_marcas` varchar(20) NOT NULL,
  `costo_producto` int(50) NOT NULL,
  `cantidad_prod` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_item`, `nombre_prod`, `id_marcas`, `costo_producto`, `cantidad_prod`) VALUES
(1, 'chaqueta', 'totto', 150000, 11),
(555555, 'jjkhv', 'tfty', 20, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) NOT NULL,
  `id_producto` int(20) NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `id_venta`, `cantidad`) VALUES
(3, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(20) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `telefono_contacto` int(14) NOT NULL,
  `email` text NOT NULL,
  `nombre_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_contacto`, `ciudad`, `telefono_contacto`, `email`, `nombre_prov`) VALUES
(2345352, 'saul ramirez', 'bogota', 31254354, '', 'chevrolet'),
(3213245, 'carlos santana', 'medellin', 3234532, '', 'fusimas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `cliente` int(20) NOT NULL,
  `vendedor` int(20) NOT NULL,
  `costo_total` bigint(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `cliente`, `vendedor`, `costo_total`, `total`) VALUES
(2, '2021-08-04 03:06:01', 342344, 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_prov_ped` (`id_prov_ped`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto_pedido` (`id_producto_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_item`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `vendedor` (`vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_prov_ped`) REFERENCES `proveedor` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `pedido_producto_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_producto_ibfk_2` FOREIGN KEY (`id_producto_pedido`) REFERENCES `producto` (`id_item`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
