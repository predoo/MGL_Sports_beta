-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2017 às 23:28
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mgl_sports`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `preparador_fisico`
--

CREATE TABLE `preparador_fisico` (
  `idPreparador` varchar(50) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `preparador_fisico`
--

INSERT INTO `preparador_fisico` (`idPreparador`, `nome`, `email`, `senha`) VALUES
('@admim1', 'Jardel', '@admim1', 'admim'),
('@admim2', 'Martha', '@admim2', 'admim'),
('@admim3', 'Titi', '@admim3', 'admim'),
('@admim4', 'Dunga', '@admim4', 'admim'),
('@admim5', 'Justiniana', '@admim5', 'admim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` varchar(50) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `preferencias` varchar(200) DEFAULT NULL,
  `senha` varchar(32) NOT NULL,
  `resposta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preparador_fisico`
--
ALTER TABLE `preparador_fisico`
  ADD PRIMARY KEY (`idPreparador`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
