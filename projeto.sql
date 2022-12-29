-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 29/12/2022 às 15:57
-- Versão do servidor: 5.7.34
-- Versão do PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `historicos`
--

CREATE TABLE `historicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_titulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `titulos`
--

CREATE TABLE `titulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `titulos`
--

INSERT INTO `titulos` (`id`, `titulo`) VALUES
(1, 'Fim da paralisação Pilotos e comissários aceitam proposta das companhias aéreas e encerram greve'),
(2, 'Exame com contraste: entenda procedimento feito por psicóloga que morreu após passar mal'),
(3, 'Tempestade de inverno deixa ao menos 17 mortos e 700 mil sem energia nos EUA'),
(4, 'Tecnologia'),
(5, 'Os termos de tecnologia mais importantes que você precisa conhecer em 2023'),
(6, 'ES usa tecnologia holandesa em plano contra alagamentos'),
(7, 'Elon Musk se torna guru de uma revolução administrativa nas empresas de tecnologia'),
(8, 'Emater vai priorizar investimentos em tecnologia no próximo ano'),
(9, 'Cultura Pop você encontra por aqui!'),
(10, 'Filmes e Séries'),
(11, 'Música'),
(12, 'Esporte'),
(13, 'Reportagem'),
(14, 'Netflix'),
(15, 'Séries'),
(16, 'Famosos no Brasil'),
(17, 'Mundo Pop'),
(18, 'Sucesso Mundial');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT de tabela `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
