-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Jan-2018 às 14:40
-- Versão do servidor: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfc_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

DROP TABLE IF EXISTS `membro`;
CREATE TABLE IF NOT EXISTS `membro` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estadocivil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `github` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pontuacao` int(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `github` (`github`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `membro`
--

INSERT INTO `membro` (`id`, `name`, `password`, `age`, `email`, `birthdate`, `estadocivil`, `telefone`, `github`, `pontuacao`, `admin`) VALUES
(1, 'Administrador', '21232f297a57a5a743894a0e4a801fc3', 97, 'admin@admin.com', '2017-12-07', 'divorciado', '758849785', 'Deus', 888888, 1),
(2, 'Gab', '21232f297a57a5a743894a0e4a801fc3', 19, 'gabrielsilvadeazevedo@gmail.com', '1998-12-20', 'solteiro', '75988586864', 'Matoro17', 3, 0),
(3, 'Ariana', '21232f297a57a5a743894a0e4a801fc3', 28, 'ari@gmail.com', '1989-08-16', 'solteiro', '341634736', 'ari', 5, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `membroproject`
--

DROP TABLE IF EXISTS `membroproject`;
CREATE TABLE IF NOT EXISTS `membroproject` (
  `ID_membroproject` int(255) NOT NULL AUTO_INCREMENT,
  `idMembro` int(255) NOT NULL,
  `idProject` int(255) NOT NULL,
  PRIMARY KEY (`ID_membroproject`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `membroproject`
--

INSERT INTO `membroproject` (`ID_membroproject`, `idMembro`, `idProject`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 2),
(5, 3, 3),
(6, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contratante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orcamento` int(255) NOT NULL,
  `workers` int(255) NOT NULL,
  `datainicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dataentrega` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `project`
--

INSERT INTO `project` (`id`, `name`, `contratante`, `orcamento`, `workers`, `datainicio`, `dataentrega`) VALUES
(1, 'Super Site', 'Irineu', 5000, 2, '2018-01-27', '2018-02-28'),
(2, 'Site PFC', 'EcompJr', 0, 2, '2017-11-20', '2018-01-26'),
(3, 'confio em vc', 'pra vc', 80, 2, '1118-12-05', '0888-04-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
