CREATE DATABASE IF NOT EXISTS `viajes`;
USE `viajes`;

CREATE TABLE IF NOT EXISTS `viajes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `precio` float NOT NULL,
  `destacado` tinyint(1) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `plazas` int(11) NOT NULL,
  `url_imagen` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;