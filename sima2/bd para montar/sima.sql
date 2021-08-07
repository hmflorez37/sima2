-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-08-2021 a las 23:56:32
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id16738436_sima`
--

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
(342344, 'luis samuel', 'cardenas', 321444445, 'cra 27 87 38', 'rolues2345@outlook.es'),
(354234, 'marinela', 'gonzales', 31039454, 'cll 24 35 87', 'marigo12@outlook.com'),
(1234789, 'johana', 'arbelaez', 3245324, 'cll 34 n 12 45', 'joarb34@yahoo.es'),
(1298563, 'Fernando', 'Gonzales', 2513456, 'Cr.45 #67-89', 'fer3456@gmail.com'),
(1461817, 'diego', 'quintero', 9655616, 'Kr 17 sur -45', 'diego@jj.com'),
(2345743, 'jose ricardo', 'zapata', 8765943, 'calle 67 n', 'josricam45@gmailc.om'),
(3465689, 'claudia patricia ', 'camacho', 31245687, 'cra 14 n 2', 'clauspa23@htmail.com'),
(9864364, 'manuel', 'acevedo', 3245623, 'cll 12 n 76 89', 'acevedomanu456@hotmail.com'),
(10254356, 'gabriel', 'sanabria', 3252145, 'ggdgd', 'gdaga@gmail.com'),
(24356789, 'jose gabriel', 'zapata', 3214534, 'cra 54 12 34', 'jgabi34@outlook.com'),
(30876545, 'daniel fernando', 'ricaute', 435623, 'cra 25 76 87', 'rifeda34@gmail.com'),
(45783948, 'santiago', 'rodriguez', 3234563, 'cra 21 34 56', 'sanro2021@gmail.com'),
(98384843, 'dayana', 'rios', 8943245, 'cll 45 87 56', 'daylove@gmail.com'),
(122332245, 'alex', 'garcia', 3143055369, 'calle 25 # 32', 'juandavidgamboaherrera84@gmail.com'),
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
(123456789, 'generico', 'generico', 123456789, 'local', 'generico@gmail.com', '123456', 'vendedor'),
(1024591965, 'Diego ', 'Quintero', 3143055369, 'Bogota', 'diegoquintero198@gmail.com', 'Diego1982', 'administrador'),
(1057583873, 'HEMERSON', 'FLOREZ', 3105840010, 'Carrera 4#5-38,El Carmen de Ch', 'hemersonflorez@gmail.com', 'xyn47c', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(50) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `id_prov_ped` int(50) NOT NULL,
  `Cant_Prod_ped` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `fecha_pedido`, `id_prov_ped`, `Cant_Prod_ped`) VALUES
(1, '2021-08-06', 123456, 5);

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

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`id`, `id_producto_pedido`, `id_pedido`, `cantidad`) VALUES
(1, 1, 1, 5);

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
(1, 'chaqueta', 'totto', 150000, 0),
(2, 'Computador', 'Pc-Smart', 700000, 8),
(3, 'Mouse ', 'Samsung', 30000, 37),
(4, 'DVD ', 'Philips', 110000, 7),
(5, 'Jean', 'Diesel', 60000, 2),
(6, 'Camiseta ', 'Koaj', 24000, 55),
(7, 'Buso', 'Buso Estampado', 35000, 15),
(8, 'Camiseta', 'Arturo calle', 45000, 18),
(9, 'Cartuchera ', 'Norma', 15000, 68),
(10, 'Aretes', 'las', 7000, 90),
(11, 'Vestido baño', 'plis', 75000, 80),
(12, 'cortinas ', 'easy', 305000, 48),
(13, 'Dulces paquete', 'Trululu', 12000, 9),
(14, 'Vaso ', 'xxx', 5000, 5500),
(15, 'chaqueta ', 'Leo', 52000, 18),
(66, 'Buso ', 'Armani', 60000, 37),
(88, 'Equipo sonido', 'Panasonnic', 600000, 9),
(1708, 'Cuaderno', 'norma', 1500, 3),
(3565, 'zapatos ', 'nike', 130000, 3),
(4515, 'bloque', 'colombia', 10000, 8),
(555555, 'TV', 'LG', 2000000, 12);

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
(1, 5, 1, 1),
(2, 6, 1, 1),
(3, 6, 2, 12),
(4, 1, 2, 3),
(5, 1, 3, 1),
(6, 5, 4, 1),
(7, 1, 5, 1),
(8, 1, 6, 1),
(9, 2, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(20) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `telefono_contacto` bigint(14) NOT NULL,
  `email` text NOT NULL,
  `nombre_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_contacto`, `ciudad`, `telefono_contacto`, `email`, `nombre_prov`) VALUES
(123456, 'carlos', 'bogota', 23457890, 'pepito@gmail.com', 'Estampados Occidente'),
(2345352, 'saul ramirez', 'bogota', 31254354, 'saulramirez@gmail.com', 'Las modernas'),
(3213245, 'carlos santana', 'medellin', 3234532, 'carlossantana@gmail.com', 'Zapatos C.A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `cliente` int(20) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `cliente`, `total`) VALUES
(1, '2021-08-06 05:14:57', 1461817, 2),
(2, '2021-08-06 05:19:21', 1461817, 15),
(3, '2021-08-06 20:27:11', 342344, 1),
(4, '2021-08-06 22:09:25', 354234, 1),
(5, '2021-08-06 22:55:20', 342344, 1),
(6, '2021-08-06 23:37:57', 122332245, 2);

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
  ADD KEY `cliente` (`cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `pedido_producto_ibfk_2` FOREIGN KEY (`id_producto_pedido`) REFERENCES `producto` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
