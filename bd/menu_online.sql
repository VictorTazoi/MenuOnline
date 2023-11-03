-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2023 às 00:42
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `menu_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `ID_ANUNCIO` int(10) NOT NULL,
  `TITULO_ANUNCIO` varchar(50) DEFAULT NULL,
  `DESCRICAO_ANUNCIO` text DEFAULT NULL,
  `VALOR_ANUNCIO` decimal(4,2) DEFAULT NULL,
  `PREPARO_ANUNCIO` varchar(10) DEFAULT NULL,
  `FK_ESTABELECIMENTO_ID_EST` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `anuncio`
--

INSERT INTO `anuncio` (`ID_ANUNCIO`, `TITULO_ANUNCIO`, `DESCRICAO_ANUNCIO`, `VALOR_ANUNCIO`, `PREPARO_ANUNCIO`, `FK_ESTABELECIMENTO_ID_EST`) VALUES
(1, 'Pizza', 'Pizza de calabresa com 4 queijos', 49.90, '20', 1),
(2, 'X-Tudo', 'Carne, Queijo, Ovo, Maionese, Ketchup', 29.90, '30', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_CLIENTE` int(10) NOT NULL,
  `NOME_CLIENTE` varchar(100) DEFAULT NULL,
  `EMAIL_CLIENTE` varchar(100) DEFAULT NULL,
  `SENHA_CLIENTE` varchar(100) DEFAULT NULL,
  `CONTATO_CLIENTE` bigint(20) DEFAULT NULL,
  `CIDADE_CLIENTE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID_CLIENTE`, `NOME_CLIENTE`, `EMAIL_CLIENTE`, `SENHA_CLIENTE`, `CONTATO_CLIENTE`, `CIDADE_CLIENTE`) VALUES
(1, 'Admin', 'victortazoi@hotmail.com', '1234', 19994969292, 'Conchal'),
(3, 'Teste Cliente', 'teste@cliente1.com', '1234', 19994827364, 'conchal'),
(4, 'Eduardo Hiroshi Tazoi', 'edutazoi21@gmail.com', '1234', 19971013098, 'conchal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `ID_EST` int(6) NOT NULL,
  `NOME_EST` varchar(50) DEFAULT NULL,
  `CONTATO1_EST` bigint(20) DEFAULT NULL,
  `CONTATO2_EST` bigint(20) DEFAULT NULL,
  `EMAIL_EST` varchar(100) DEFAULT NULL,
  `RUA_EST` varchar(50) DEFAULT NULL,
  `NUMERO_EST` int(5) DEFAULT NULL,
  `BAIRRO_EST` varchar(50) DEFAULT NULL,
  `CIDADE_EST` varchar(50) DEFAULT NULL,
  `FUNCIONAMENTO_EST` text DEFAULT NULL,
  `LOCAL_ESTABELECIMENTO` text DEFAULT NULL,
  `SENHA_EST` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`ID_EST`, `NOME_EST`, `CONTATO1_EST`, `CONTATO2_EST`, `EMAIL_EST`, `RUA_EST`, `NUMERO_EST`, `BAIRRO_EST`, `CIDADE_EST`, `FUNCIONAMENTO_EST`, `LOCAL_ESTABELECIMENTO`, `SENHA_EST`) VALUES
(1, 'FLIP Pizzaria', 1938662355, 1938662355, 'flip.pizzaria@gmail.com', 'Álvaro Ribeiro', 378, 'Centro', 'Conchal', 'Quarta a Domingo, das 18h ás 24h', 'https://www.google.com.br/maps/place/Pizzaria+Flip/@-22.3320141,-47.1737561,19z/data=!4m6!3m5!1s0x94c86779d0a00011:0xe40117ca7b2ed954!8m2!3d-22.3318745!4d-47.173955!16s%2Fg%2F11flbr3ylp?entry=ttu', '1234'),
(2, 'Estabelecimento de Teste', 19992938475, 19992938475, 'estabelecimento@teste1.com', 'São Paulo', 293, 'Popular', 'conchal', '8h ás 20h', NULL, '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`ID_ANUNCIO`),
  ADD KEY `FK_ANUNCIO_2` (`FK_ESTABELECIMENTO_ID_EST`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Índices para tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`ID_EST`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `ID_ANUNCIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_CLIENTE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  MODIFY `ID_EST` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `FK_ANUNCIO_2` FOREIGN KEY (`FK_ESTABELECIMENTO_ID_EST`) REFERENCES `estabelecimento` (`ID_EST`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
