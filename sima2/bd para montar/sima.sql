-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2021 a las 04:16:39
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `nombre_prod` varchar(50) NOT NULL,
  `cantidad_prod` int(50) NOT NULL,
  `id_almacen` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`nombre_prod`, `cantidad_prod`, `id_almacen`) VALUES
('aceite 20w', 50, 1),
('amortiguador', 5, 2),
('amortiguador de maletero', 10, 3),
('bateria', 5, 4),
('bombillas', 50, 5),
('bujia', 25, 6),
('campana embriague', 3, 7),
('carburador discover 125 150', 10, 8),
('disco defrenos', 10, 9),
('eje primario', 2, 10),
('eje secundario con planos', 2, 11),
('exploradora chevrolet sail 2014', 10, 12),
('fusible', 100, 13),
('guardabarros', 10, 14),
('guaya clush', 50, 15),
('kit clucht', 20, 16),
('limpiaparabrisas', 42, 17),
('palanca de arranque zanella', 10, 18),
('pastillas traseras', 50, 19),
('piñon', 50, 20),
('retrovisor', 5, 21),
('valvula de escape', 10, 22);

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
  `e-mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `telefono`, `direccion`, `e-mail`) VALUES
(342344, 'luis samuel', 'romero', 32134535, 'cra 27 87 39', 'rolues2345@outlook.es'),
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
  `telefono_empleado` int(14) NOT NULL,
  `direccion_empleado` varchar(30) NOT NULL,
  `cargo_empleado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_empleado`, `apellido_empleado`, `telefono_empleado`, `direccion_empleado`, `cargo_empleado`) VALUES
(234234, 'juana', 'lopez', 3212343, 'cll50 48 6', 'registradora'),
(1003842, 'libardo', 'tabares', 31245687, 'cra 43 54 ', 'almacenista'),
(1029343, 'andres', 'zuluaga', 31029383, 'cll 34 23 45', 'mecanico'),
(32039484, 'alex', 'cardona', 3128394, 'cra 23 45 67', 'electrico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manto`
--

CREATE TABLE `manto` (
  `id_manto` int(20) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `id_placa` varchar(20) NOT NULL,
  `tipo_vehi` varchar(50) NOT NULL,
  `id_empleado` int(14) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `observ` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `manto`
--

INSERT INTO `manto` (`id_manto`, `id_cliente`, `id_placa`, `tipo_vehi`, `id_empleado`, `fecha_ingreso`, `observ`) VALUES
(0, 30876545, 'xyn47c', 'moto', 1029343, '2021-07-06', 'cambio de bujia y revision de aceite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(50) NOT NULL,
  `id_prod_ped` int(50) NOT NULL,
  `Marca_Prod_ped` varchar(50) NOT NULL,
  `id_prov_ped` int(50) NOT NULL,
  `Cant_Prod_ped` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_prod_ped`, `Marca_Prod_ped`, `id_prov_ped`, `Cant_Prod_ped`) VALUES
(1, 78986, 'chevrolet', 2345352, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_item` int(20) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `id_marcas` varchar(20) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `cantidad_prod` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_item`, `nombre_prod`, `id_marcas`, `fecha_vencimiento`, `cantidad_prod`) VALUES
(1, 'neumatico', 'universal', '2025-05-12', 17),
(2, 'farola derecha', 'renault', '2024-02-12', 10),
(3, 'casco', 'shaft', '0000-00-00', 20),
(4, 'filtro', 'jax', '2021-06-29', 1),
(5, 'manguera', 'akt', '2021-06-10', 14),
(6, 'casco', 'jax', '2021-06-23', 10),
(7, 'manguera', 'tvs', '2021-06-24', 4),
(8, 'carenaje', 'honda cb125', '2025-06-28', 7),
(9, 'tornillo', 'universal', '2021-06-30', 99),
(12, 'manguera', 'akt', '2024-11-12', 10),
(22, 'piñon', '2', '2021-05-31', 0),
(50, 'aa', 'aa', '2021-07-20', 15),
(51, 'aa', 'aa', '0000-00-00', 15),
(52, 'HEMERSON', 'akt', '0000-00-00', 1),
(2358, 'bujia', 'tvs', '2025-02-12', 15),
(9876, 'amortiguador de maletero', 'peugeot', '2023-10-12', 0),
(45678, 'disco defrenos', 'q4', '2023-09-22', 0),
(46750, 'exploradora chevrolet sail 2014', 'hizone', '2025-07-24', 0),
(56435, 'fusible', 'generico', '2022-12-20', 0),
(57493, 'eje primario', 'juki', '2029-06-07', 0),
(58493, 'bateria', 'ytxl85', '2022-11-18', 0),
(67554, 'retrovisor', 'jymop', '2031-07-22', 0),
(76557, 'amortiguador', 'generico', '2021-06-30', 0),
(78986, 'bombillas', 'ghi', '2024-08-21', 0),
(86848, 'limpiaparabrisas', 'seat cordoba', '2029-05-22', 0),
(89009, 'pastillas traseras', 'kia quoris', '2022-01-20', 0),
(112234, 'aceite 20w', 'mobil super', '2022-04-21', 0),
(127483, 'palanca de arranque zanella', 'motomel 200', '2025-05-22', 0),
(543235, 'bujia', 'focus', '2024-02-15', 0),
(584930, 'carburador discover 125 150', 'generico', '2023-03-16', 0),
(594384, 'guaya clush', 'ktm', '2021-10-07', 0),
(658439, 'guardabarros', 'generico', '2021-05-26', 0),
(796043, 'kit clucht', 'phc', '2023-09-21', 0),
(876785, 'campana embriague', 'juki', '2025-09-23', 0),
(889403, 'eje secundario con planos', 'juki', '2026-10-01', 0),
(964932, 'valvula de escape', 'erid', '2022-02-03', 0);

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
(3, 2, 1, 1),
(4, 3, 1, 1),
(5, 1, 3, 1),
(6, 5, 3, 1),
(7, 9, 3, 1),
(8, 1, 4, 1),
(9, 2, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prov`
--

CREATE TABLE `prov` (
  `id_item` int(20) NOT NULL,
  `id_proveedor` int(20) NOT NULL,
  `nombre_contacto` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `telefono_contacto` int(14) NOT NULL,
  `nombre_prov` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prov`
--

INSERT INTO `prov` (`id_item`, `id_proveedor`, `nombre_contacto`, `ciudad`, `telefono_contacto`, `nombre_prov`) VALUES
(796043, 2345352, 'saul ramirez', 'bogota', 31254354, 'chevrolet'),
(56435, 3213245, 'carlos santana', 'medellin', 3234532, 'fusimas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE `temp` (
  `id_item` int(20) NOT NULL,
  `nombre_prod` varchar(50) NOT NULL,
  `id_marcas` varchar(20) NOT NULL,
  `cantidad_prod` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`id_item`, `nombre_prod`, `id_marcas`, `cantidad_prod`) VALUES
(1, 'neumatico', 'universal', 1),
(2, 'farola derecha', 'renault', 1),
(3, 'casco', 'shaft', 1),
(4, 'filtro', 'jax', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_emp` int(50) NOT NULL,
  `nom_user` varchar(50) NOT NULL,
  `pass_user` varchar(40) NOT NULL,
  `id_users` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_emp`, `nom_user`, `pass_user`, `id_users`) VALUES
(1003842, 'almacenadmin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

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
(1, '2021-07-06 01:29:32', 1234789, 2),
(3, '2021-07-06 19:24:10', 354234, 3),
(4, '2021-07-06 20:05:31', 342344, 1),
(5, '2021-07-06 20:05:46', 342344, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id_almacen`),
  ADD KEY `nombre_prod` (`nombre_prod`);

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
-- Indices de la tabla `manto`
--
ALTER TABLE `manto`
  ADD PRIMARY KEY (`id_manto`),
  ADD KEY `cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_prod_ped` (`id_prod_ped`),
  ADD KEY `id_prov_ped` (`id_prov_ped`);

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
-- Indices de la tabla `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `item` (`id_item`);

--
-- Indices de la tabla `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `nombre_prod` (`nombre_prod`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `id_emp` (`id_emp`);

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
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_users` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `almacen_ibfk_1` FOREIGN KEY (`nombre_prod`) REFERENCES `producto` (`nombre_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `manto`
--
ALTER TABLE `manto`
  ADD CONSTRAINT `cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manto_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_prod_ped`) REFERENCES `producto` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_prov_ped`) REFERENCES `prov` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_3` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_item`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prov`
--
ALTER TABLE `prov`
  ADD CONSTRAINT `item` FOREIGN KEY (`id_item`) REFERENCES `producto` (`id_item`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
