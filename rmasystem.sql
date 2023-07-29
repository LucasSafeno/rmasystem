-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/07/2023 às 16:55
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rmasystem`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acclevel`
--

CREATE TABLE `acclevel` (
  `id` int(11) NOT NULL,
  `acclevel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `acclevel`
--

INSERT INTO `acclevel` (`id`, `acclevel`) VALUES
(1, 'Administrador'),
(2, 'Gerente'),
(3, 'RMA'),
(4, 'Financeiro'),
(5, 'Vendas'),
(6, 'Estoque'),
(7, 'Assistência'),
(8, 'Em Validação');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria_produtos`
--

CREATE TABLE `categoria_produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria_produtos`
--

INSERT INTO `categoria_produtos` (`id`, `categoria`) VALUES
(1, 'Placa-Mãe'),
(2, 'Teclado'),
(3, 'Mouse'),
(4, 'Headset'),
(5, 'Energia'),
(6, 'Gabinetes'),
(7, 'Impressora'),
(8, 'SSDs'),
(9, 'HDs'),
(10, 'Pen Drive');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cnpj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `nfes`
--

CREATE TABLE `nfes` (
  `id` int(11) NOT NULL,
  `numero_nf` int(11) NOT NULL,
  `data_compra` date NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  `id_cnpj_fornecedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `processos`
--

CREATE TABLE `processos` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `cod_interno` int(11) NOT NULL,
  `cod_nf` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `valor_nf` float NOT NULL,
  `valor_venda` float NOT NULL,
  `data_compra` date NOT NULL,
  `numero_nf` int(11) NOT NULL,
  `id_status` tinyint(4) NOT NULL DEFAULT 1,
  `id_processo` int(11) NOT NULL,
  `data_processo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Pendente'),
(2, 'Aguardando resposta'),
(3, 'Aguardando Retorno'),
(4, 'Aguardando NF'),
(5, 'Aguardando Validação'),
(6, 'Aguardando Envio'),
(7, 'Finalizado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `token` varchar(32) NOT NULL,
  `id_acclevel` int(11) NOT NULL DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `token`, `id_acclevel`) VALUES
(1, 'Lucas Tenório', 'lucas@email.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 8),
(2, 'Administrador', 'adm@email.com', '698dc19d489c4e4db73e28a713eab07b', '698dc19d489c4e4db73e28a713eab07b', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acclevel`
--
ALTER TABLE `acclevel`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categoria_produtos`
--
ALTER TABLE `categoria_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `nfes`
--
ALTER TABLE `nfes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acclevel`
--
ALTER TABLE `acclevel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `categoria_produtos`
--
ALTER TABLE `categoria_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nfes`
--
ALTER TABLE `nfes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `processos`
--
ALTER TABLE `processos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
