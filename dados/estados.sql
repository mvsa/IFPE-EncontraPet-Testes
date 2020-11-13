-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Fev-2020 às 17:42
-- Versão do servidor: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.0.33-19+ubuntu18.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encontrapet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `Id` int(11) NOT NULL,
  `codigo_uf` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `regiao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`Id`, `codigo_uf`, `nome`, `uf`, `regiao`) VALUES
(1, 12, 'Acre', 'AC', 1),
(2, 27, 'Alagoas', 'AL', 2),
(3, 16, 'AmapÃ¡', 'AP', 1),
(4, 13, 'Amazonas', 'AM', 1),
(5, 29, 'Bahia', 'BA', 2),
(6, 23, 'CearÃ¡', 'CE', 2),
(7, 53, 'Distrito Federal', 'DF', 5),
(8, 32, 'EspÃ­rito Santo', 'ES', 3),
(9, 52, 'GoiÃ¡s', 'GO', 5),
(10, 21, 'MaranhÃ£o', 'MA', 2),
(11, 51, 'Mato Grosso', 'MT', 5),
(12, 50, 'Mato Grosso do Sul', 'MS', 5),
(13, 31, 'Minas Gerais', 'MG', 3),
(14, 15, 'ParÃ¡', 'PA', 1),
(15, 25, 'ParaÃ­ba', 'PB', 2),
(16, 41, 'ParanÃ¡', 'PR', 4),
(17, 26, 'Pernambuco', 'PE', 2),
(18, 22, 'PiauÃ­', 'PI', 2),
(19, 33, 'Rio de Janeiro', 'RJ', 3),
(20, 24, 'Rio Grande do Norte', 'RN', 2),
(21, 43, 'Rio Grande do Sul', 'RS', 4),
(22, 11, 'RondÃ´nia', 'RO', 1),
(23, 14, 'Roraima', 'RR', 1),
(24, 42, 'Santa Catarina', 'SC', 4),
(25, 35, 'SÃ£o Paulo', 'SP', 3),
(26, 28, 'Sergipe', 'SE', 2),
(27, 17, 'Tocantins', 'TO', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
