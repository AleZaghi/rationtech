-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 08-Set-2019 às 14:16
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fabrica_de_racao`
--
CREATE DATABASE IF NOT EXISTS `fabrica_de_racao` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fabrica_de_racao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id_animal` int(4) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `especie_id` int(11) NOT NULL,
  `fase_id` int(11) NOT NULL,
  `animal` varchar(20) CHARACTER SET utf8 NOT NULL,
  `obs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_animal`),
  KEY `fkIdCat` (`categoria_id`),
  KEY `fkIdEsp` (`especie_id`),
  KEY `fkIdFase` (`fase_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id_animal`, `categoria_id`, `especie_id`, `fase_id`, `animal`, `obs`) VALUES
(3, 0, 0, 0, 'Ovelha', 'teste3'),
(5, 0, 0, 0, 'cavalo', 'teste4'),
(38, 0, 0, 0, '1', '1'),
(41, 1, 2, 1, 'Frango', 'testecb2'),
(42, 1, 2, 1, 'Frango', 'testecb3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autenticacao`
--

DROP TABLE IF EXISTS `autenticacao`;
CREATE TABLE IF NOT EXISTS `autenticacao` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, ' Corte'),
(2, 'Reprodução');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especie`
--

DROP TABLE IF EXISTS `especie`;
CREATE TABLE IF NOT EXISTS `especie` (
  `id_especie` int(11) NOT NULL AUTO_INCREMENT,
  `nome_especie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_especie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especie`
--

INSERT INTO `especie` (`id_especie`, `nome_especie`) VALUES
(1, 'Bovino'),
(2, 'Aves'),
(3, 'Aves');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fase`
--

DROP TABLE IF EXISTS `fase`;
CREATE TABLE IF NOT EXISTS `fase` (
  `id_fase` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fase` varchar(50) NOT NULL,
  PRIMARY KEY (`id_fase`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fase`
--

INSERT INTO `fase` (`id_fase`, `nome_fase`) VALUES
(1, 'Adulto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id_fornecedor` int(4) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(18) CHARACTER SET utf8 NOT NULL,
  `razaosocial` varchar(50) CHARACTER SET utf8 NOT NULL,
  `logradouro` varchar(15) CHARACTER SET utf8 NOT NULL,
  `rua` varchar(30) CHARACTER SET utf8 NOT NULL,
  `numero` varchar(4) CHARACTER SET utf8 NOT NULL,
  `bairro` varchar(20) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `nomefantasia` varchar(40) NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `insumos`
--

DROP TABLE IF EXISTS `insumos`;
CREATE TABLE IF NOT EXISTS `insumos` (
  `id_insumo` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) CHARACTER SET utf8 NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8 NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 NOT NULL,
  `custo` float NOT NULL,
  `medida` varchar(3) CHARACTER SET utf8 NOT NULL,
  `id_fornecedor` int(11) NOT NULL,
  PRIMARY KEY (`id_insumo`),
  KEY `fk_fornecedores` (`id_fornecedor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `racoes`
--

DROP TABLE IF EXISTS `racoes`;
CREATE TABLE IF NOT EXISTS `racoes` (
  `id_racao` int(11) NOT NULL AUTO_INCREMENT,
  `animal` varchar(20) CHARACTER SET utf8 NOT NULL,
  `fase` varchar(20) CHARACTER SET utf8 NOT NULL,
  `categoria` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_racao`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `racoes`
--

INSERT INTO `racoes` (`id_racao`, `animal`, `fase`, `categoria`) VALUES
(1, '', '', ''),
(2, 'vaca', 'adulto', 'corte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(4) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(40) CHARACTER SET utf8 NOT NULL,
  `cargo` varchar(20) CHARACTER SET utf8 NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(8) CHARACTER SET utf8 NOT NULL,
  `confsenha` varchar(8) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cpf`, `nome`, `telefone`, `email`, `cargo`, `login`, `senha`, `confsenha`) VALUES
(1, '11111111111', 'bbbbbbb', '22222222222', 'ccc@ccc.ccc', 'aaaaa', '333333', '444444', '444444'),
(2, '. 12345 .', '. Vanessa .', '. 667777 .', '. aa. ', '. Analista .', '. 01 .', '. 1 .', '. 1.'),
(3, '12345', 'Vanessa', '667777', 'aa', 'Analista', '01', '1', '1'),
(4, '05308564175', 'Vanessa Adelezia Dacheri', '66999355934', 'vanessa_dacheri@hotmail.com', 'Analista', '20171202412330206', '123', '123'),
(5, '05308564175', 'Vanessa Adelezia Dacheri', '66999355934', 'vanessa_dacheri@hotmail.com', 'Analista', '20171202412330206', '1', '1'),
(6, '02474152199', 'ALEXANDRA RONISIE ZAGHI', '66981352617', 'alerzaghi@gmail.com', 'a', '1234567890', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
