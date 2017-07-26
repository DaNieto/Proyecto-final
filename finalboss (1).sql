-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 08:51:05
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `finalboss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'PC', 'Juegos para PC'),
(2, 'PlayStation', 'Juegos para PlayStation'),
(3, 'Xbox', 'Juegos para Xbox'),
(4, 'Wii', 'Juegos para Wii');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `id_detalle` int(11) NOT NULL,
  `id_carrito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precioxdesc` decimal(6,0) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_oferta` int(11) NOT NULL,
  `nombre_oferta` varchar(10) NOT NULL,
  `descuento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_usuarios`
--

CREATE TABLE `ofertas_usuarios` (
  `id_oferta` int(11) NOT NULL,
  `id_usuarios` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `image` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `image`, `id_categoria`, `created_at`, `updated_at`) VALUES
(6, 'Gears of War', '25 años despues de los eventos Gears of war 3, surge una nueva amenaza y de pende de James y Marcos Fenix detenerla.', '1000', 'gears', 3, '2017-07-24 01:01:27', '2017-07-24 01:01:27'),
(7, 'Grand Theft Auto V', 'Ultima entrega de la aclamada franquicia de Grand Theft Auto, Ayuda a la mafia a conquistar los Angeles.', '850', 'grand', 1, '2017-07-24 01:04:10', '2017-07-24 01:04:10'),
(9, 'Just Dance 2017', 'Baila al ritmo de tus canciones favoritas,!!! Solo o con tus amigos.', '700', 'justD', 4, '2017-07-24 01:06:37', '2017-07-24 01:06:37'),
(11, 'Kirby and the rainbown paint brush', 'Continuacion de kirby canvas course, dibuja el camino de kirby para llegar a la meta y cumplir tus objetivos.', '300', 'kirby', 4, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(12, 'Left for Dead 2', 'Atrapado en un apocalipsis zombi, tienes la tarea de escapar solo o hasta con 3 amigos, la supervivencia de los 4 es crucial.', '500', 'left', 1, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(13, 'Mario Kart 8 Delux', 'Compite contra la computadora o tus amigos en carreras de alta velocidad en pistas con tematicas de tus personajes favoritos de nintendo.', '1300', 'mario', 4, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(14, 'Mario Party 10', 'Compite contra tus amigos en minijuegos divertidos y variados, para ganar puntos y obtener la victoria.', '800', 'party', 4, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(15, 'Payday 2', 'Juega hasta con 3 amigos a ser el malo, cumple trabajos y misiones para politicos corruptos, pandillas y narcotraficantes.', '800', 'payday', 3, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(16, 'Counter Strike Global Offensive', 'Hermoso Hermoso X 2, multijugador, 2 equipos, poliicas contra terroristas... Inicia el asalto!!!.', '600', 'PC_counter', 1, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(17, 'Fallout 4', 'Despues de una guerra nuclear, un hombre esta dispuesto a hacer todo para encontrar a su hijo perdido.', '1200', 'PC_fall', 1, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(18, 'Battlefield 1', 'Revive la primera y pelea en la primera guerra mundial, con fidelidad a graficos y eventos.', '1200', 'PS_battle', 2, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(19, 'Call of Duty Infinite Warfare', 'Participa en una guerra futurista espacial con zombis y nazis espaciales.', '800', 'PS_call', 2, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(20, 'Crash Bandicoot Nsane Trilogy', 'Revive los Crash Bandicoot originales, tal como los recuerdas, solo con graficos mejorados.', '1200', 'PS_crash', 2, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(21, 'Fifa 17', 'La mas nueva entrega de la afamada franquicia fifa ahora con campaña.', '1200', 'PS_fifa', 2, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(22, 'Resident Evil 7', 'Volviendo a los origenes, Resident Evil 7 retoma el estilo de juego terrorifico del Resident Evil original.', '1000', 'resident', 1, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(23, 'Skyrim the elder scrolls 5', 'En un reino al borde de la destruccion un heroe con sangre de dragon debe usar sus habilidades sobre humanas para salvar al reino.', '500', 'skyrim', 1, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(24, 'Super Smash Bros para Wii', 'Pelea hasta con 4 amigos utilizando tus personajes de nintendo favoritos y sus habilidades.', '600', 'smash', 4, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(25, 'The last guardian', 'Trata de escapar de un castillo en ruinas con un extraño nuevo amigo, una grifo!!!.', '1100', 'theGuard', 2, '2017-07-24 01:36:13', '2017-07-24 01:36:13'),
(26, 'The last of us remastered', 'Despues de una epidemia mundial, esta en manos del jugador(joel) cuidar de la niña cullo cuerpo posee la cura.', '1200', 'theLast', 2, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(27, 'The Legend of Zelda Sky Sword', 'Acompaña a link en esta aventura en el cielo, antecesora al Ocarina of Time, donde tendras como compañera de aventuras a Fay.', '300', 'TLOZ_Sky', 4, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(28, 'The Legend of Zelda Breath of the Wild', '100 años despues de la destruccion del reino de Hyrule, despiertas sin saber quien eres... solo sabes, que depende de ti restaurar el reino!!.', '1200', 'W_breath', 4, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(29, 'Donkey Kong Conutry Tropical Freeze', 'Revive la experiencia del Donkey Kong original, con esta nueva entrega fiel a la jugabilidad.', '800', 'W_dd', 4, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(30, 'The Witcher wild hunts 3', 'Regresa Gerald the Rivia despues de años de buscar a su hija perdida, se entera de que ha sido vista en el reino y el cazador de mounstros debe hacer su oficio a un lado para buscarla.', '600', 'witcherPC', 1, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(31, 'The Witcher wild Hunt 3', 'Regresa Gerald the Rivia despues de años de buscar a su hija perdida, se entera de que ha sido vista en el reino y el cazador de mounstros debe hacer su oficio a un lado para buscarla.', '600', 'witcherPS', 2, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(32, 'The Witcher wild Hunt', 'Regresa Gerald the Rivia despues de años de buscar a su hija perdida, se entera de que ha sido vista en el reino y el cazador de mounstros debe hacer su oficio a un lado para buscarla.', '600', 'witcherX', 3, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(33, 'Battlefield 1', 'Revive la primera y pelea en la primera guerra mundial, con fidelidad a graficos y eventos.', '1200', 'X_battle', 3, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(34, 'Call of dutty infinite warfare', 'Participa en una guerra futurista espacial con zombis y nazis espaciales.', '1200', 'X_call', 3, '2017-07-24 02:00:23', '2017-07-24 02:00:23'),
(35, 'Fifa 17', 'La mas nueva entrega de la afamada franquicia fifa ahora con campaña.', '1200', 'X_fifa', 3, '2017-07-24 02:00:23', '2017-07-24 02:00:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

CREATE TABLE `tipousuarios` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipousuarios`
--

INSERT INTO `tipousuarios` (`id_tipo`, `nombre`, `descripcion`) VALUES
(1, 'Admin', 'Persona en cargada de hacer inserciones de videojuegos nuevos, asi como de gestionar los cambios a las vistas del sitio web'),
(2, 'Cliente', 'Persona registrada en el sistema, para poder ser acreedor al derecho de comprar artículos por medio del sitio web.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'luis', 'luizfer.sap@gmail.com', '$2y$10$809NoMqFa1DO5LBW57qqm.lDEJx89MIKzFSNMeoNxsGh8C89vatx2', 'nNhtNmbxHuxi8wHDyD6IKqAH1rRFMGUMp6Z96i9mwbrqfAIA6gtwqa0snrm3', '2017-07-25 22:47:38', '2017-07-25 22:47:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(10) NOT NULL,
  `tipo` int(2) NOT NULL,
  `direccion` text NOT NULL,
  `cp` int(10) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `id_tarjeta` int(20) NOT NULL,
  `pass_tarjeta` varchar(255) NOT NULL,
  `coins` int(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `tipo`, `direccion`, `cp`, `telefono`, `id_tarjeta`, `pass_tarjeta`, `coins`, `updated_at`, `created_at`) VALUES
(1, 1, 'añsdhfñadsbfnladsfaslhn', 8170, 66717898822, 123154124, 'qwerty', 0, '2017-07-26 06:12:20', '2017-07-26 06:12:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_detalle` int(11) NOT NULL,
  `totalcompra` decimal(10,0) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_carrito` (`id_carrito`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_oferta`);

--
-- Indices de la tabla `ofertas_usuarios`
--
ALTER TABLE `ofertas_usuarios`
  ADD KEY `id_oferta` (`id_oferta`),
  ADD KEY `id_usuarios` (`id_usuarios`),
  ADD KEY `id_usuarios_2` (`id_usuarios`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD KEY `tipo` (`tipo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_usuario` (`id_detalle`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_oferta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id_carrito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ofertas_usuarios`
--
ALTER TABLE `ofertas_usuarios`
  ADD CONSTRAINT `ofertas_usuarios_ibfk_1` FOREIGN KEY (`id_oferta`) REFERENCES `ofertas` (`id_oferta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_usuarios_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`tipo`) REFERENCES `tipousuarios` (`id_tipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_detalle`) REFERENCES `detalleventa` (`id_detalle`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
