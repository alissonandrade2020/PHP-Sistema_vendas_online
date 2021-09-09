-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Set-2021 às 02:22
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vendasonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `cpf_cnpj`, `data`) VALUES
(1, 'Alisson de Andrade Araújo', '386.XXX.XXX-XX', '2021-09-05 20:43:32'),
(2, 'Alberia Beatriz Germano', '387.XXX.XXX-XX', '2021-09-05 20:43:45'),
(3, 'Maria Julia de Oliveira Andrade', '388.XXX.XXX-XX', '2021-09-05 20:49:46'),
(4, 'Paula Roberta', '389.XXX.XXX-XX', '2021-09-05 20:43:21'),
(5, 'Julio Carlos', '390.XXX.XXX-XX', '2021-09-06 15:57:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `ativo` enum('s','n') NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `quantidade`, `preco`, `ativo`, `data`) VALUES
(1, 'Teclado', 12, '30.00', 's', '2021-09-06 13:04:51'),
(2, 'Monitor ', 45, '150.00', 's', '2021-09-06 13:04:55'),
(3, 'Carregador', 0, '100.00', 'n', '2021-09-06 13:04:59'),
(5, 'TV', 150, '3500.00', 's', '2021-09-06 13:05:14'),
(6, 'Gabinete', 0, '978.00', 'n', '2021-09-05 21:02:57'),
(7, 'Pelicula', 10, '20.00', 's', '2021-09-06 13:05:22'),
(8, 'Violão', 150, '850.00', 's', '2021-09-06 13:05:29'),
(9, 'Caixa de Som', 85, '950.00', 's', '2021-09-06 19:18:09'),
(10, 'Celular', 10, '2500.00', 's', '2021-09-06 19:18:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
