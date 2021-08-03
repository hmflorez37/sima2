-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2021 a las 23:42:14
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
  `cargo_empleado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre_empleado`, `apellido_empleado`, `telefono_empleado`, `direccion_empleado`, `email_empleado`, `cargo_empleado`) VALUES
(12032154, 'andres', 'estepa', 32025468, 'bogota', 'aa@gmail.com', 'oficina'),
(1057583873, 'HEMERSON', 'FLOREZ', 3105840010, 'Carrera 4#5-38,El Carmen de Ch', 'hemersonflore@gmail.com', 'administrador');

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

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`id`, `id_producto_pedido`, `id_pedido`, `cantidad`) VALUES
(1, 46750, 2, 10),
(3, 10, 2, 7),
(4, 543235, 3, 3),
(5, 11, 3, 5);

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
(1, 'neumatico', 'universal', 20000, 12),
(2, 'farola derecha', 'renault', 20240212, 9),
(3, 'casco', 'shaft', 0, 20),
(4, 'filtro', 'jax', 20210629, 20),
(5, 'manguera', 'akt', 20210610, 13),
(6, 'casco', 'jax', 20210623, 10),
(7, 'manguera', 'tvs', 20210624, 4),
(8, 'carenaje', 'honda cb125', 20250628, 7),
(9, 'tornillo', 'universal', 20210630, 99),
(10, 'agua', 'universal', 0, 15),
(11, 'casco', '1', 0, 15),
(19, 'agua', 'universal', 0, 4),
(22, 'piñon', '2', 20210531, 0),
(55, 'guaya', 'universal', 0, 14),
(2358, 'bujia', 'tvs', 20250212, 15),
(9874, 'Ruana', 'Boyaca Ruanas ', 60000, 2),
(9876, 'amortiguador de maletero', 'peugeot', 20231012, 0),
(45678, 'disco defrenos', 'q4', 20230922, 0),
(46750, 'exploradora chevrolet sail 2014', 'hizone', 20250724, 0),
(56435, 'fusible', 'generico', 20221220, 0),
(57493, 'eje primario', 'juki', 20290607, 0),
(58493, 'bateria', 'ytxl85', 20221118, 0),
(67554, 'retrovisor', 'jymop', 20310722, 0),
(76557, 'amortiguador', 'generico', 20210630, 0),
(78986, 'bombillas', 'ghi', 20240821, 0),
(86848, 'limpiaparabrisas', 'seat cordoba', 20290522, 0),
(89009, 'pastillas traseras', 'kia quoris', 20220120, 0),
(112234, 'aceite 20w', 'mobil super', 20220421, 0),
(127483, 'palanca de arranque zanella', 'motomel 200', 20250522, 0),
(543235, 'bujia', 'focus', 20240215, 0),
(584930, 'carburador discover 125 150', 'generico', 20230316, 0),
(594384, 'guaya clush', 'ktm', 20211007, 0),
(658439, 'guardabarros', 'generico', 20210526, 0),
(796043, 'kit clucht', 'phc', 20230921, 0),
(876785, 'campana embriague', 'juki', 20250923, 0),
(889403, 'eje secundario con planos', 'juki', 20261001, 0),
(964932, 'valvula de escape', 'erid', 20220203, 0);

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
(9, 2, 5, 1),
(10, 1, 7, 1),
(11, 55, 7, 1),
(12, 5, 8, 1),
(13, 1, 12, 1),
(14, 1, 12, 1),
(15, 1, 13, 1),
(16, 2, 13, 1),
(17, 2, 13, 1),
(18, 1, 5, 2),
(19, 1, 1, 1),
(20, 1, 2, 1);

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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nom_user` varchar(50) NOT NULL,
  `pass_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nom_user`, `pass_user`) VALUES
('admin', 'admin');

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
(2, '2021-08-02 21:29:01', 0, 0, 0, 1);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
