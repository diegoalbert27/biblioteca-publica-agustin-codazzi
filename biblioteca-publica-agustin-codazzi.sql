-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2020 at 04:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca-publica-agustin-codazzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `instituciones`
--

CREATE TABLE `instituciones` (
  `id_inst` int(11) NOT NULL,
  `nom_inst` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dir_inst` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tel_inst` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `instituciones`
--

INSERT INTO `instituciones` (`id_inst`, `nom_inst`, `dir_inst`, `tel_inst`) VALUES
(1, 'Universidad Central de Venezuela', 'Caracas', '024356175641'),
(2, 'Universidad de Carabobo', 'Carabobo', '02431203202'),
(3, 'Upta', 'La Coromoto', '02435617892'),
(4, 'Instituto Escuela Maracay', 'Calle Paez, Maracay', '02431203204'),
(5, 'I. U. P. \"Santiago MariÃ±o\"', 'Maracay', '02432357845'),
(6, 'Tik tok', 'Los Angeles, California', '02431203200'),
(7, 'Mi casa', 'No sÃ©', '04265618920'),
(8, 'MANPA', 'San Miguel', '04167826819');

-- --------------------------------------------------------

--
-- Table structure for table `ocupacion`
--

CREATE TABLE `ocupacion` (
  `id_ocup` int(11) NOT NULL,
  `nom_ocup` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ocupacion`
--

INSERT INTO `ocupacion` (`id_ocup`, `nom_ocup`) VALUES
(1, 'Trabajador'),
(2, 'Estudiante'),
(3, 'Ninguno');

-- --------------------------------------------------------

--
-- Table structure for table `solicitantes`
--

CREATE TABLE `solicitantes` (
  `id_sol` int(11) NOT NULL,
  `nom_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ape_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ced_sol` int(11) NOT NULL,
  `edad_sol` int(11) NOT NULL,
  `tlf_sol` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `dir_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `corr_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sex_sol` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ocup_sol` int(11) NOT NULL,
  `inst_sol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `solicitantes`
--

INSERT INTO `solicitantes` (`id_sol`, `nom_sol`, `ape_sol`, `ced_sol`, `edad_sol`, `tlf_sol`, `dir_sol`, `corr_sol`, `sex_sol`, `ocup_sol`, `inst_sol`) VALUES
(6, 'Juan', 'Almarza', 21603061, 26, ' 0424150403', 'Las Delicias', 'Juancpg@gmail.com', 'Masculino', 2, 2),
(8, 'Tony', 'Carrazco', 7683167, 45, ' 0424758493', 'Caracas', 'tc67368@gmail.com', 'Masculino', 2, 1),
(9, 'Jonathan', 'Perez', 27299020, 19, '04121369396', 'Maracay', 'test228@email.com', 'Masculino', 2, 2),
(12, 'Valeria', 'Tse', 31984658, 14, '04121369498', 'Las Acasias', 'rosamelano@gmail.com', 'Femenino', 2, 6),
(19, 'Diego', 'Hinagas', 28249486, 19, '4164471728', 'La Morita, Sta Ines', 'hinagasdiego@hotmail.com', 'Masculino', 2, 2),
(23, 'Luis', 'Ortuño', 29564514, 19, '4121369393', 'La Morita', 'yourname@mail.com', 'Masculino', 2, 3),
(25, 'Daniel', 'Rodriguez', 24156458, 26, '4144564895', 'Santa Rita', 'diego@mail.com', 'Masculino', 1, 8),
(26, 'Mario', 'Bross', 25456518, 25, '4124594864', 'Maracay', 'test@email.com', 'Masculino', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `passwd_user` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_user`, `name_user`, `email_user`, `passwd_user`) VALUES
(18, 'Diego', 'hinagas@email.com', '$2y$10$ks3oW533dcb10z8fpqdM4u0KpxRB3dwaUoy2I548NBMGUsJzA7hRC'),
(19, 'Marco', 'marco@email.com', '$2y$10$xs5Eb1lNs5gyMm.0pCdYmuZvoYGNt9/3eNiEsSqFpq.dJlyaNTZpG'),
(20, 'Pepe', 'test@email.com', '$2y$10$FWCGuKZpnROkRFBURbmW1OKjpYQwxJXtpIMwlqd3gJsE2GcVWAGAu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id_inst`);

--
-- Indexes for table `ocupacion`
--
ALTER TABLE `ocupacion`
  ADD PRIMARY KEY (`id_ocup`);

--
-- Indexes for table `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD PRIMARY KEY (`id_sol`),
  ADD KEY `ocup_sol` (`ocup_sol`,`inst_sol`),
  ADD KEY `inst_sol` (`inst_sol`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `id_inst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ocupacion`
--
ALTER TABLE `ocupacion`
  MODIFY `id_ocup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solicitantes`
--
ALTER TABLE `solicitantes`
  MODIFY `id_sol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `solicitantes`
--
ALTER TABLE `solicitantes`
  ADD CONSTRAINT `solicitantes_ibfk_1` FOREIGN KEY (`ocup_sol`) REFERENCES `ocupacion` (`id_ocup`),
  ADD CONSTRAINT `solicitantes_ibfk_2` FOREIGN KEY (`inst_sol`) REFERENCES `instituciones` (`id_inst`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
