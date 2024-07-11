-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/07/2024 às 17:08
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
-- Banco de dados: `arquivos`
--
CREATE DATABASE IF NOT EXISTS `arquivos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arquivos`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagem`
--

INSERT INTO `imagem` (`id`, `nome`, `path`, `data_upload`) VALUES
(1, 'GFHDFGHSDFHSDFGH.jpg', 'files/668fe020afca2.jpg', '2024-07-11 10:37:36'),
(2, 'GFHDFGHSDFHSDFGH.jpg', 'files/668fe04b54956.jpg', '2024-07-11 10:38:19'),
(3, '668fe07669e2b', 'files/668fe07669e2b.jpg', '2024-07-11 10:39:02'),
(4, '668fe4649182d', 'files/668fe4649182d.jpg', '2024-07-11 10:55:48'),
(5, '668fe4c0e48c3', 'files/668fe4c0e48c3.jpg', '2024-07-11 10:57:20'),
(6, '668fe4fae4582', 'files/668fe4fae4582.jpg', '2024-07-11 10:58:18'),
(7, '668fe5327c0e3', 'files/668fe5327c0e3.jpg', '2024-07-11 10:59:14'),
(8, '668fe5636f01c', 'files/668fe5636f01c.jpg', '2024-07-11 11:00:03');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
