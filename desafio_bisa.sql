-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2020 às 23:05
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `desafio_bisa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_conta`
--

CREATE TABLE `tb_conta` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `saldo` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_conta`
--

INSERT INTO `tb_conta` (`id`, `descricao`, `saldo`) VALUES
(1, 'Banco Bradesco', '2500.00'),
(2, 'Banco Santader', '4000.00'),
(3, 'Banco do Brasil', '5040.00'),
(4, 'Banco Inter', '5900.00'),
(5, 'Banco Nubank', '100000.00'),
(6, 'banco do nordeste', '50.00'),
(7, 'banco do nordeste', '5.00'),
(8, 'banco do nordeste', '5.00'),
(9, 'banco teste', '5500.00'),
(10, 'banco do nordeste de teste', '1571.00'),
(11, 'Banco Nubank', '1000.00'),
(12, 'Banco Bradesco', '2900.00'),
(13, 'Banco Bradesco', '2800.00'),
(14, 'Banco Bradesc', '2500.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_movimetacao`
--

CREATE TABLE `tb_movimetacao` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `tipo_movimentacao` int(11) NOT NULL,
  `valor` decimal(9,0) NOT NULL,
  `data_movimentacao` date NOT NULL,
  `conta_bancaria` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_movimetacao`
--
ALTER TABLE `tb_movimetacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_movimetacao`
--
ALTER TABLE `tb_movimetacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
