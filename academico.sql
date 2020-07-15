-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2020 a las 14:57:27
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificadors`
--

CREATE TABLE `identificadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ci` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_naci` date NOT NULL,
  `residencia` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `identificadors`
--

INSERT INTO `identificadors` (`id`, `ci`, `nombre`, `f_naci`, `residencia`) VALUES
(1, 8308638, 'Limber Alberto Choque Quisbert', '1996-01-23', 'lp'),
(4, 1, 'Yeri Flores', '1996-07-24', 'lp'),
(7, 2, 'Ivan Salcedo', '2020-07-09', 'or'),
(8, 3, 'Hector cuentas', '2020-07-16', 'or'),
(9, 4, 'Erick Apaza', '1999-07-02', 'lp'),
(10, 5, 'Wendy Aquino', '2000-05-05', 'cb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_identificadors_table', 1),
(4, '2020_07_09_141311_create_users_table', 2),
(7, '2020_07_14_012906_create_notas_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ci` int(11) NOT NULL,
  `materia` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota_final` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `ci`, `materia`, `nota_final`) VALUES
(7, 1, 'INF - 324', 45),
(8, 2, 'INF - 324', 20),
(9, 3, 'INF - 324', 69),
(10, 4, 'INF - 324', 56),
(11, 5, 'INF - 324', 80),
(12, 8308638, 'INF - 324', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usuario`, `password`, `color`) VALUES
(1, '$2y$10$OsP2izKObfWgpkqpGJKujuzxq0W7QFKwSzsFKmVNXjNUzQhkD/mhS', '#f8f9fa'),
(2, '$2y$10$bQ3WIwTN823BEF/1FJJxj.VIOeXPEufgxz6DHIDElRCgYuyx7SY52', '#f8f9fa'),
(3, '$2y$10$g0DLYjVq/ZB0E9Hc9wkcp.KPKzo.5dj0o5ypNmHf//esgqyEQ/vuW', '#f8f9fa'),
(4, '$2y$10$isELXVzhAyQh9J66atIdt.niiYqwJPd0h2uC1UFuTEMO0joXjx5py', '#f8f9fa'),
(5, '$2y$10$exM7ivzPaLJNjZLS7QjaqeC5/mcz2HihMYnEY30aNNhumDl27On/m', '#f8f9fa'),
(8308638, '$2y$10$rq1AGZcPv9zO7XRp/P2ZoOC5Muu37YdKaEGdM2yDM/0/NijruiWSm', '#e1ba93');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `identificadors`
--
ALTER TABLE `identificadors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificadors_id_unique` (`id`),
  ADD UNIQUE KEY `identificadors_ci_unique` (`ci`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notas_ci_foreign` (`ci`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_usuario_unique` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `identificadors`
--
ALTER TABLE `identificadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ci_foreign` FOREIGN KEY (`ci`) REFERENCES `identificadors` (`ci`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_usuario_foreign` FOREIGN KEY (`usuario`) REFERENCES `identificadors` (`ci`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
