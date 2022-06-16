-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2022 a las 12:59:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mvc_basics`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `phone_number` int(9) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `street_address` varchar(100) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postal_code` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `last_name`, `email`, `gender_id`, `avatar`, `age`, `phone_number`, `city`, `street_address`, `state`, `postal_code`) VALUES
(1, 'Dameron', 'Lei', 'jackon@network.com', 1, 'https://i.pinimg.com/564x/b5/b0/c6/b5b0c6aa90deca084914209155ebb3ee.jpg', 24, 738362767, 'San Jone', '126', 'CA', 39221),
(2, 'Jade', 'Doe', 'jhondoe@foo.com', 1, 'https://i.pinimg.com/564x/d6/1a/ca/d61acafae910ae5619c36484ec09f73b.jpg', 34, 638362767, 'New York', '126', 'CA', 39221),
(3, 'BB-8', 'Mills', 'mills@leila.com', 2, 'https://i.pinimg.com/564x/60/09/7a/60097a86581e72278390264170866ce3.jpg', 26, 638362767, 'San Diego', '126', 'CA', 39671),
(4, 'Mirax', 'Desmond', 'dismond@foo.com', 1, 'https://i.pinimg.com/564x/b6/ec/4f/b6ec4f6ff7f2f4bb1bb684dc0d0d9d74.jpg', 30, 638362767, 'New York', '126', 'CA', 85716),
(5, 'Luke', 'Smith', 'susanmith@baz.com', 2, 'https://i.pinimg.com/564x/d3/2d/69/d32d6986c49e36a8e7863d6bb74d8fab.jpg', 28, 638362767, 'New York', '126', 'CA', 9563),
(6, 'Chewbacca', 'Simpson', 'brad@foo.com', 1, 'https://i.pinimg.com/474x/0d/fc/6e/0dfc6e993c049ed338c896fd7956bbe6.jpg', 40, 638362767, 'Atlanta', '126', 'GEO', 1928),
(7, 'R2-D2', 'Walker', 'walkerneil@baz.com', 1, 'https://i.pinimg.com/474x/32/de/58/32de582d8eb4dc51b43325b62f5665a3.jpg', 38, 638362767, 'New York', '126', 'CA', 17345),
(8, 'Han Solo', 'Jackon', 'rack@network.com', 1, 'https://i.pinimg.com/474x/52/c0/99/52c0994e7655c644697cb23f23c8df1b.jpg', 22, 638362767, 'New York', '126', 'CA', 68573),
(9, 'Yoda', 'Eustasio', 'homer@gmail.com', 1, 'https://i.pinimg.com/474x/6d/02/7e/6d027e348df47d440c49fef280fe455d.jpg', 34, 638362767, 'New York', '126', 'CA', 9857),
(10, 'K-2SO', 'Foo', 'sandra@foo.com', 2, 'https://i.pinimg.com/474x/69/84/82/69848265d5b8844361f19b129c1a8888.jpg', 34, 638362767, 'New York', '126', 'CA', 9274),
(16, 'Qui-Gon Jinn', 'Jinn', 'alejandroaperez1994g@gmail.com', 1, 'https://i.pinimg.com/474x/db/a6/a1/dba6a196220f2f6a4cbc17cfd4aec6ac.jpg', 49, 663437883, NULL, 'Murga/22/5', 'Las Palmas', 35003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hobbies`
--

CREATE TABLE `hobbies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hobbies`
--

INSERT INTO `hobbies` (`id`, `name`, `type`) VALUES
(1, 'Palpatine', 'https://i.pinimg.com/474x/e5/b6/3f/e5b63fb4ac1e93b3d17f4ff52ed9905e.jpg'),
(2, 'Darth Vader', 'https://i.pinimg.com/474x/44/73/1d/44731de7d01dd643d276e094d93cc755.jpg'),
(3, 'Commander Cody', 'https://i.pinimg.com/474x/a6/3d/0d/a63d0da83e8f36548323858b38521738.jpg'),
(4, 'The Grand Inquisitor', 'https://i.pinimg.com/474x/8d/b8/bb/8db8bbdfd7602fa447b1986ba10781bc.jpg'),
(5, 'Trilla Suduri', 'https://i.pinimg.com/474x/b5/13/27/b513277150e8622cf88aaa8c15d106a7.jpg'),
(6, 'Eighth Brother', 'https://i.pinimg.com/474x/6f/f2/23/6ff223a892c5f351636c57895b6cce6b.jpg'),
(7, 'Fifth Brother', 'https://i.pinimg.com/474x/3a/31/b7/3a31b75dd888496d545940cad3d4364d.jpg'),
(8, 'Director Krennic', 'https://i.pinimg.com/474x/a4/8e/1b/a48e1b627d47a2d4d3f6b7f6baf90998.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
