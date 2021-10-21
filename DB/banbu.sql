-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2021 a las 22:38:09
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banbu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alertas`
--

CREATE TABLE `alertas` (
  `id` int(120) NOT NULL,
  `Mensaje` text NOT NULL,
  `hora_desde` varchar(120) NOT NULL,
  `hora_hasta` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alertas`
--

INSERT INTO `alertas` (`id`, `Mensaje`, `hora_desde`, `hora_hasta`) VALUES
(1, 'Celebrá San Patricio con un 20% de descuento!', '07:50:00', '23:50:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `productos` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` text NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `ImagenProducto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `categoria`, `productos`, `descripcion`, `precio`, `thumb`, `fecha`, `ImagenProducto`) VALUES
(24, 'Entrada', 'Ensalada Vegan', 'Mix de verduras de estación con semillas', '360', 'Ensalada.JPG', '2021-07-29 19:07:50', 'Ensalada.JPG'),
(25, 'Postres', 'Postre helado volcán', 'Helado de vainilla con frambuesas y chocolate', '250', 'postres.JPG', '0000-00-00 00:00:00', 'Postres.JPG'),
(49, 'Pizzas', 'Muzza Bambú', 'Pizza muzarella con aceitunas verdes. 8 porciones', '450', 'Queso-en-la-pizza.jpg', '2021-08-01 22:54:15', ''),
(52, 'Hamburguesas', 'Burger Bambú', 'Triple carne, tomate,lechuga.4 tipos de queso', '700', 'triple-cheese-bacon-de-la___Lj4vcOHr__720x0__1.jpg', '2021-08-02 01:34:55', ''),
(53, 'Cafeteria', 'Expresso', 'Café expresso mediano', '246', 'cafe.jpg', '2021-08-04 13:28:34', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosempresa`
--

CREATE TABLE `datosempresa` (
  `id` int(120) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `nombreempresa` varchar(120) NOT NULL,
  `telefonobar` int(20) NOT NULL,
  `mapalocal` mediumtext NOT NULL,
  `horario` varchar(120) CHARACTER SET utf8 NOT NULL,
  `horahasta` text NOT NULL,
  `formaspagoefectivo` varchar(120) NOT NULL,
  `formaspagocredito` varchar(120) NOT NULL,
  `formaspagodebito` varchar(120) NOT NULL,
  `formaspagomepa` varchar(120) NOT NULL,
  `pedidosya` varchar(100) NOT NULL,
  `rappi` varchar(120) NOT NULL,
  `glovo` varchar(120) CHARACTER SET utf8 NOT NULL,
  `deliverypersonal` int(15) NOT NULL,
  `perfilfacebook` mediumtext NOT NULL,
  `perfilinstagram` mediumtext NOT NULL,
  `mensajeAlerta` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datosempresa`
--

INSERT INTO `datosempresa` (`id`, `logo`, `nombreempresa`, `telefonobar`, `mapalocal`, `horario`, `horahasta`, `formaspagoefectivo`, `formaspagocredito`, `formaspagodebito`, `formaspagomepa`, `pedidosya`, `rappi`, `glovo`, `deliverypersonal`, `perfilfacebook`, `perfilinstagram`, `mensajeAlerta`) VALUES
(7, 'logo.png', 'Bambú', 2147483647, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.130848802406!2d-68.84930468451333!3d-32.921140980928605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e097cb0d8e787%3A0x3c7211b2b84170e!2sCapri%20Pizzer%C3%ADa!5e0!3m2!1ses-419!2sar!4v1627858712202!5m2!1ses-419!2sar\" width=\"200\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'Lunes a viernes de 18 a  1 y Sábados y domingos de 16 a 2 hs', '24', '1', '1', '1', '1', '1', '1', '1', 1, 'https://www.facebook.com/bambumza', 'bambucafebar', '¡Consultanos el menú del día!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formasdepago`
--

CREATE TABLE `formasdepago` (
  `id` int(120) NOT NULL,
  `Efectivo` text NOT NULL,
  `Debito` text NOT NULL,
  `Credito` text NOT NULL,
  `MercadoPago` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formasdepago`
--

INSERT INTO `formasdepago` (`id`, `Efectivo`, `Debito`, `Credito`, `MercadoPago`) VALUES
(1, 'true', 'true', 'true', 'true');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(255) NOT NULL,
  `dias_desde` text NOT NULL,
  `dias_hasta` text NOT NULL,
  `horario_desde` int(120) NOT NULL,
  `horario_hasta` int(120) NOT NULL,
  `finde_desde` text NOT NULL,
  `finde_hasta` text NOT NULL,
  `horariofinde_desde` int(120) NOT NULL,
  `horariofinde_hasta` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `dias_desde`, `dias_hasta`, `horario_desde`, `horario_hasta`, `finde_desde`, `finde_hasta`, `horariofinde_desde`, `horariofinde_hasta`) VALUES
(1, 'Lunes', 'Viernes', 10, 23, 'Sabados', 'Domingos', 10, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logo`
--

CREATE TABLE `logo` (
  `id` int(120) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logo`
--

INSERT INTO `logo` (`id`, `nombre`, `imagen`) VALUES
(1, 'logo-cliente', 'logo_cliente.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` int(4) NOT NULL,
  `thumb` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `categoria`, `producto`, `descripcion`, `precio`, `thumb`) VALUES
(1, 'ensaladas', 'ensalada bambu', 'mix de verduras', 250, 'Ensalada.JPG'),
(2, 'postres', 'helado', 'helado de vainilla con frambuesa', 250, 'Postres.JPG'),
(4, 'panificacion', 'croissant', 'Croissant relleno de crema pastelera', 300, ''),
(6, 'cafeteria', 'Espresso', 'café expresso', 150, 'roasted-beet-salad-5546923_1280.jpg'),
(8, 'brunch', 'Yogurt con frutas y granola', '', 350, 'knack5-100.jpg'),
(9, 'cafeteria', 'Flat white', '', 230, 'croisant.jpg'),
(10, 'cafeteria', 'chocolatada', '', 230, 'croisant.jpg'),
(11, 'cervezas', 'andes origen', 'botella 1lt', 280, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(120) NOT NULL,
  `promo` varchar(120) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` int(120) NOT NULL,
  `thumb` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `promo`, `descripcion`, `precio`, `thumb`) VALUES
(15, 'croissant bambú', 'Café o infucion + jugo de naranja + croissant relleno', 300, 'croisant.jpg'),
(19, 'tostadas', 'Café o infusion + jugo de naranja + tostadas con queso crema y mermelada', 580, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(120) NOT NULL,
  `mapa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `mapa`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3348.9742873394553!2d-68.84659568427732!3d-32.92527757813789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e0bd878366ac1%3A0x5f462e2a510ead05!2sPlaza%20Godoy%20Cruz!5e0!3m2!1ses-419!2sar!4v1627571450567!5m2!1ses-419!2sar\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `celular` varchar(120) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `celular`, `email`, `pass`) VALUES
(7, 'Bruno', 'Diaz', '2612590713', 'gonzalezcastellvigabriel@gmail.com', '6116afedcb0bc31083935c1c262ff4c9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alertas`
--
ALTER TABLE `alertas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `formasdepago`
--
ALTER TABLE `formasdepago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alertas`
--
ALTER TABLE `alertas`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `datosempresa`
--
ALTER TABLE `datosempresa`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `formasdepago`
--
ALTER TABLE `formasdepago`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
