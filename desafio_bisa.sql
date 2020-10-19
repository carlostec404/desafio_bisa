-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2020 às 18:48
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
  `user_id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `saldo` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_conta`
--

INSERT INTO `tb_conta` (`id`, `user_id`, `descricao`, `saldo`) VALUES
(1, 0, 'Banco Bradesco', '2500.00'),
(2, 0, 'Banco Santader', '4000.00'),
(3, 0, 'Banco do Brasil', '5040.00'),
(4, 0, 'Banco Inter', '5900.00'),
(5, 0, 'Banco Nubank', '100000.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_movimentacao`
--

CREATE TABLE `tb_movimentacao` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `tipo_movimentacao` varchar(11) NOT NULL,
  `valor` decimal(9,0) NOT NULL,
  `data_movimentacao` date NOT NULL,
  `conta_bancaria` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_movimentacao`
--

INSERT INTO `tb_movimentacao` (`id`, `descricao`, `tipo_movimentacao`, `valor`, `data_movimentacao`, `conta_bancaria`) VALUES
(1, 'banco teste', '0', '100', '0000-00-00', ''),
(2, 'banco do nordeste de teste', '0', '100', '0000-00-00', ''),
(3, 'banco do nordeste de teste', 'saque', '100', '0000-00-00', ''),
(4, 'banco teste', '', '100', '0000-00-00', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_conta`
--
ALTER TABLE `tb_conta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tb_movimentacao`
--
ALTER TABLE `tb_movimentacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
