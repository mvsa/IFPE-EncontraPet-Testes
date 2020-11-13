-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 06-Fev-2020 às 19:36
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
-- Estrutura da tabela `dialogos_pessoas_pets`
--

CREATE TABLE `dialogos_pessoas_pets` (
  `id` int(11) NOT NULL,
  `id_pets` int(11) NOT NULL,
  `id_pessoas` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL,
  `texto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especies`
--

CREATE TABLE `especies` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `especies`
--

INSERT INTO `especies` (`id`, `tipo`) VALUES
(1, 'Cachorrxs'),
(2, 'Gatxs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `id_pets` int(11) NOT NULL,
  `legenda` varchar(140) DEFAULT NULL,
  `caminho` varchar(50) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `interacoes_pets`
--

CREATE TABLE `interacoes_pets` (
  `id` int(11) NOT NULL,
  `id_pets` int(11) NOT NULL,
  `id_pessoas` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes_pets`
--

CREATE TABLE `movimentacoes_pets` (
  `id` int(11) NOT NULL,
  `id_pets` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `data_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `face_id` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `especies_interesses` int(11) NOT NULL DEFAULT '0',
  `senha` varchar(100) NOT NULL,
  `id_municipios_interesses` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `face_id`, `telefone`, `especies_interesses`, `senha`, `id_municipios_interesses`) VALUES
(2, 'FlÃ¡vio Silva', 'flavio@afixo.com.br', NULL, '(81) 30941018', 2, 'VFZSSmVnPT0=', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `id_pessoas` int(11) NOT NULL,
  `id_especies` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text,
  `sexo` varchar(10) NOT NULL,
  `castrado` varchar(10) DEFAULT NULL,
  `idade` varchar(100) DEFAULT NULL,
  `id_status` int(11) NOT NULL,
  `vacinado` varchar(10) DEFAULT NULL,
  `vermifugado` varchar(10) DEFAULT NULL,
  `lat` varchar(100) DEFAULT NULL,
  `lng` varchar(100) DEFAULT NULL,
  `responsavel` varchar(100) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `id_municipios` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Pra adocao'),
(2, 'Adotado'),
(3, 'Perdido'),
(4, 'Achado'),
(5, 'Excluido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos`
--

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipos`
--

INSERT INTO `tipos` (`id`, `tipo`) VALUES
(1, 'Ong'),
(2, 'Petshop'),
(3, 'Clinica Veterinaria'),
(4, 'Casa de Racao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dialogos_pessoas_pets`
--
ALTER TABLE `dialogos_pessoas_pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pets` (`id_pets`),
  ADD KEY `id_pessoas` (`id_pessoas`);

--
-- Indexes for table `especies`
--
ALTER TABLE `especies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pets` (`id_pets`);

--
-- Indexes for table `interacoes_pets`
--
ALTER TABLE `interacoes_pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pets` (`id_pets`),
  ADD KEY `id_pessoas` (`id_pessoas`);

--
-- Indexes for table `movimentacoes_pets`
--
ALTER TABLE `movimentacoes_pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pets` (`id_pets`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `id_municipios_interesses` (`id_municipios_interesses`),
  ADD KEY `especies_interesses` (`especies_interesses`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_especies` (`id_especies`),
  ADD KEY `id_pessoas` (`id_pessoas`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_municipios` (`id_municipios`),
  ADD KEY `vacinado` (`vacinado`),
  ADD KEY `vermifugado` (`vermifugado`),
  ADD KEY `castrado` (`castrado`),
  ADD KEY `sexo` (`sexo`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipos`
--
ALTER TABLE `tipos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dialogos_pessoas_pets`
--
ALTER TABLE `dialogos_pessoas_pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `especies`
--
ALTER TABLE `especies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interacoes_pets`
--
ALTER TABLE `interacoes_pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movimentacoes_pets`
--
ALTER TABLE `movimentacoes_pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipos`
--
ALTER TABLE `tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
