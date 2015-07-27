-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 27-Jul-2015 às 20:52
-- Versão do servidor: 5.5.32
-- versão do PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `contel`
--
CREATE DATABASE IF NOT EXISTS `contel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `contel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `define` varchar(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `cpf` int(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(35) NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin_user`
--

INSERT INTO `admin_user` (`id`, `define`, `name`, `cpf`, `email`, `password`, `creationdate`, `modifieddate`, `status`) VALUES
(1, 'Admin', 'Sistema', 0, 'sistema@contel.com.br', 'fb82857b3689d0ec2c5219aaa3c724e8', '2015-07-02', '2015-07-24 04:45:38', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `type` varchar(8) NOT NULL,
  `size` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `archive`
--

INSERT INTO `archive` (`id`, `name`, `type`, `size`, `url`, `title`, `description`, `creationdate`, `modifieddate`) VALUES
(1, 'logo-contel.fw.png', 'png', 89, '4dcbe8f2ef947dc10fc6176ac29b0cbd.png', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(2, 'logo_correios_pac.jpg', 'jpeg', 13, '394dd49703bd02a715b2775792408189.jpeg', '', '', '0000-00-00', '0000-00-00 00:00:00'),
(3, '11755669_1653357801575969_644598249', 'jpeg', 58, 'b7237b5b44d243c622de2bc479cd421c.jpeg', '', '', '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `tabledef` varchar(50) NOT NULL,
  `archive_id` int(11) NOT NULL,
  `fature` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `attachments`
--

INSERT INTO `attachments` (`id`, `parent_id`, `tabledef`, `archive_id`, `fature`, `sort`, `creationdate`, `modifieddate`) VALUES
(1, 1, 'news', 1, 1, 0, '2015-07-27', '2015-07-27'),
(2, 2, 'news', 2, 1, 0, '2015-07-27', '0000-00-00'),
(3, 3, 'news', 3, 1, 0, '2015-07-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coment_complaint`
--

CREATE TABLE IF NOT EXISTS `coment_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_complaint` int(11) NOT NULL,
  `coment` mediumtext NOT NULL,
  `id_attendant` int(11) NOT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `coment_complaint`
--

INSERT INTO `coment_complaint` (`id`, `parentid`, `id_user`, `id_complaint`, `coment`, `id_attendant`, `modifiedby`, `creationdate`, `modifieddate`) VALUES
(1, 0, 0, 17, 'çlkhjkjvkgjkhçjklhklj jkh k.', 1, NULL, '0000-00-00', '0000-00-00 00:00:00'),
(2, 1, 1, 17, 'iupoopuijyiu i kj', 0, NULL, '0000-00-00', '0000-00-00 00:00:00'),
(3, 0, 0, 17, 'kjlhlkjhklj', 1, NULL, '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `coment_id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `tabledef` varchar(32) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  PRIMARY KEY (`coment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` int(11) NOT NULL,
  `related` int(11) NOT NULL,
  `descri_related` varchar(200) DEFAULT NULL,
  `complaint` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `fortreaty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fortreaty` (`fortreaty`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `complaint`
--

INSERT INTO `complaint` (`id`, `protocol`, `related`, `descri_related`, `complaint`, `creationdate`, `modifieddate`, `createdby`, `status`, `fortreaty`) VALUES
(1, 651061, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 1, 1, 1),
(2, 5993, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 3, 1, 1),
(3, 616275, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 5, 1, 1),
(4, 790527, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 7, 1, 1),
(5, 931098, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 8, 1, 1),
(6, 2840610, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 10, 1, 1),
(7, 6892712, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 12, 1, 1),
(8, 3303214, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 14, 1, 1),
(9, 4845615, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 15, 1, 1),
(10, 2730716, 0, NULL, 'testando reclamação', '2015-07-02', '0000-00-00 00:00:00', 16, 1, 1),
(11, 4107117, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 17, 1, 1),
(12, 9560519, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 19, 1, 1),
(13, 614720, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 20, 1, 1),
(14, 7230221, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 21, 1, 1),
(15, 5305822, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 22, 1, 1),
(16, 4177324, 0, NULL, 'asdf', '2015-07-02', '0000-00-00 00:00:00', 24, 1, 1),
(17, 4118125, 1, NULL, '', '2015-07-03', '2015-07-03 03:52:35', 25, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `define_complaint`
--

CREATE TABLE IF NOT EXISTS `define_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_define_complaint` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `define_complaint`
--

INSERT INTO `define_complaint` (`id`, `title_define_complaint`) VALUES
(1, 'Cobrança Indevida/Erro de Fatura'),
(2, 'Problemas de Sinal'),
(3, 'Bloqueio Injustificado de Internet Móvel'),
(4, 'Falha ou Demora no Atendimento'),
(5, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `sort` int(11) NOT NULL,
  `votes` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `finished` tinyint(1) NOT NULL,
  `creationdate` datetime NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `link_reference` varchar(200) DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `news` text NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `published` tinyint(1) NOT NULL,
  `fature` tinyint(1) DEFAULT '0',
  `createby` int(11) NOT NULL,
  `tabledef` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `link_reference`, `description`, `news`, `creationdate`, `modifieddate`, `published`, `fature`, `createby`, `tabledef`) VALUES
(1, 'teste ', 'teste-', 'ts', 'testando anexos', '<p>testando anexar arquivo com tabelas archive e attachments</p>', '2015-07-27', '2015-07-27 18:37:24', 1, 1, 1, 'news'),
(2, 'teste ', 'teste-', 'as', 'testando anexos', '<p>testando anexar arquivo com tabelas archive e attachments</p>', '2015-07-27', '2015-07-27 18:37:37', 1, 1, 1, 'news'),
(3, 'teste ', 'teste-', '', 'testando anexos', '<p>testando anexar arquivo com tabelas archive e attachments</p>', '2015-07-27', '0000-00-00 00:00:00', 1, 1, 1, 'news');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_complaint`
--

CREATE TABLE IF NOT EXISTS `status_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_name` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `status_complaint`
--

INSERT INTO `status_complaint` (`id`, `status_name`) VALUES
(1, 'Aberto'),
(2, 'Em Processo'),
(3, 'Em Atendimento'),
(4, 'Atendido'),
(5, 'Finalizado'),
(6, 'Fechado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabledef`
--

CREATE TABLE IF NOT EXISTS `tabledef` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tabledef`
--

INSERT INTO `tabledef` (`id`, `name`) VALUES
(1, 'news'),
(2, 'enquete'),
(3, 'admin_avatar'),
(4, 'user_avatar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `define` varchar(60) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `cpf_cnpj` varchar(30) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `complement` varchar(100) DEFAULT NULL,
  `state` varchar(60) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cpf` (`cpf_cnpj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `define`, `user_name`, `cpf_cnpj`, `email`, `phone`, `password`, `zipcode`, `address`, `number`, `complement`, `state`, `birth`, `creationdate`, `modifieddate`, `status`) VALUES
(1, '', 'Fabio', NULL, 'fabio.asilva@r7.com', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '2015-07-18 18:35:57', 0),
(2, '', 'fabio 2', NULL, 'fabio.asilva1@r7.com', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '2015-07-19 17:39:13', 0),
(3, '', 'Fabio Araujo da Silva', NULL, 'teste@teste.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '0000-00-00 00:00:00', 0),
(4, '', 'micha', NULL, 'micha@micha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '0000-00-00 00:00:00', 0),
(5, '', 'teste', NULL, 'teste1@teste.com', NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '2015-07-19 17:39:26', 0),
(6, '', 'atasd', NULL, 'asdkf@klasj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-17', '0000-00-00 00:00:00', 0),
(8, '', '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(11, '', 'testando', NULL, 'testando@teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(12, '', 'testando novo', NULL, 'testenvo@lkj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(13, '', 'asdsdfasd', NULL, 'asdfafas@asdfasdffsda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(14, '', 'asdfjuoçjlçkjas', NULL, 'paokljas@lkpj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(15, '', 'xcvbnm,.,mn', NULL, 'dfghjh@fghj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(16, '', 'dfghjhg@ghj', NULL, 'ghjh@tgh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(17, '', 'laksjdfl', NULL, 'aiusdyiu@asyhdiuf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(18, '', 'asidu', NULL, 'iuasyd@iuas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(19, '', 'lkas', NULL, 'akjshd@aisudy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(20, '', 'asasdf', NULL, 'asdfasdf@asdasdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(21, '', 'ajsdf', NULL, 'asdfj@asldkj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(22, '', 'dfghgfd', NULL, 'sdfghjkhgf@hbgvcxvb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-20', '0000-00-00 00:00:00', 0),
(23, '', 'testad', NULL, 'testasd@asjdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-07-22', '0000-00-00 00:00:00', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
