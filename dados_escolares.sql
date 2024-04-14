-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 14/04/2024 às 02:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dados_escolares`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `direção`
--

CREATE TABLE `direção` (
  `idDireção` int(11) NOT NULL,
  `Usuário` varchar(45) NOT NULL,
  `CPF` varchar(45) NOT NULL,
  `DataNacimento` date NOT NULL,
  `Email` varchar(110) NOT NULL,
  `Senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `direção`
--

INSERT INTO `direção` (`idDireção`, `Usuário`, `CPF`, `DataNacimento`, `Email`, `Senha`) VALUES
(1, 'Adriel', '11119515602', '2001-07-18', 'adrielnazarsantos@hotmail.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `direção`
--
ALTER TABLE `direção`
  ADD PRIMARY KEY (`idDireção`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `direção`
--
ALTER TABLE `direção`
  MODIFY `idDireção` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
