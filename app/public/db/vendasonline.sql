-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Set-2021 às 17:54
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vendasonline`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(14) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome_cliente`, `cpf_cnpj`, `data`) VALUES
(1, 'Alisson de Andrade AraÃºjo', '386.XXX.XXX-XX', '2021-09-05 20:43:32'),
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
  `imagem` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `ativo` enum('s','n') NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `imagem`, `quantidade`, `preco`, `ativo`, `data`) VALUES
(1, 'Teclado', 'menu_login.png', 22, '30.00', 's', '2021-09-06 13:04:51'),
(2, 'Monitor ', 'teste.png', 42, '150.00', 's', '2021-09-10 13:51:51'),
(3, 'Carregador', 'Ok.png', 5, '100.00', 'n', '2021-09-10 13:51:57'),
(5, 'TV', 'smart.jpg', 150, '3500.00', 's', '2021-09-10 13:52:10'),
(6, 'Gabinete', 'gb.jpg', 8, '978.00', 'n', '2021-09-10 13:52:22'),
(7, 'Pelicula', 'Celualr.jpg', 10, '20.00', 's', '2021-09-10 13:52:33'),
(8, 'ViolÃ£o', 'Coda.png', 70, '850.00', 's', '2021-09-10 13:53:35'),
(9, 'Caixa de Som', 'multimidia.jpg', 85, '950.00', 's', '2021-09-10 13:52:46'),
(10, 'Celular', 'samsung.jpg', 10, '2500.00', 's', '2021-09-10 13:52:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
