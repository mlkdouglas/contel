-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 04-Jul-2015 às 06:04
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
  `admin_name` varchar(60) NOT NULL,
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

INSERT INTO `admin_user` (`id`, `define`, `admin_name`, `cpf`, `email`, `password`, `creationdate`, `modifieddate`, `status`) VALUES
(1, 'Admin', 'Sistema', 0, 'sistema@contel.com.br', ' 403a9edaefaed235672d51e7ce9325c8', '2015-07-02', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `ext` varchar(8) NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `archive_id` int(11) NOT NULL,
  `fature` tinyint(1) NOT NULL,
  `sort` int(11) NOT NULL,
  `criationdate` date NOT NULL,
  `modifieddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` int(11) NOT NULL,
  `related` int(11) NOT NULL,
  `descri_related` varchar(200) DEFAULT NULL,
  `complaint` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `fortreaty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`complaint_id`),
  KEY `fortreaty` (`fortreaty`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `protocol`, `related`, `descri_related`, `complaint`, `creationdate`, `modifieddate`, `createdby`, `status`, `fortreaty`) VALUES
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
  `link` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `news` text NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `published` tinyint(1) NOT NULL,
  `fature` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `description`, `news`, `creationdate`, `modifieddate`, `published`, `fature`) VALUES
(1, 'teste', 'teste', '<p>teste</p>', '<p style="text-align: left;">&nbsp;teste d atualiza&ccedil;&atilde;o</p>', '2015-07-03', '2015-07-03 15:08:52', 1, 1),
(2, 'asdf', 'asfas', 'dfasdfsa', '<p><br data-mce-bogus="1"></p>', '2015-07-03', '2015-07-03 15:08:56', 1, 1),
(3, 'asdfsad', 'fasdfasdf', '<p>asdfasdfas</p>', '<p><br data-mce-bogus="1"></p>', '2015-07-03', '2015-07-03 15:09:00', 1, 1),
(4, 'Testando tinymce', 'asdf', 'asdfasdf', '', '2015-07-03', '2015-07-03 15:09:35', 1, 1),
(5, 'Teste novo', 'asklj', 'çlkjas', '<p>testando novamente envio de form com tinymce</p>', '2015-07-03', '0000-00-00 00:00:00', 1, 0);

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
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `define` varchar(60) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `cpf_cnpj` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `zipcode` int(11) NOT NULL,
  `address` varchar(35) NOT NULL,
  `number` int(11) NOT NULL,
  `complement` varchar(100) DEFAULT NULL,
  `state` varchar(60) NOT NULL,
  `birth` date DEFAULT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `cpf` (`cpf_cnpj`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id_user`, `define`, `user_name`, `cpf_cnpj`, `email`, `phone`, `password`, `zipcode`, `address`, `number`, `complement`, `state`, `birth`, `creationdate`, `modifieddate`, `status`) VALUES
(1, 'Pessoa fisica', 'Fabio Araujo da Silva', '30904306810', 'fabio.asilva@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(3, 'Pessoa fisica', 'Fabio Araujo da Silva', '309043068101', 'fabio.asilvaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(5, 'Pessoa fisica', 'Fabio Araujo da Silva', '3090430683', 'fabio.asilvaqq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(7, 'Pessoa fisica', 'Fabio Araujo da Silva', '3090430688', 'fabio.asilvaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(8, 'Pessoa fisica', 'Fabio Araujo da Silva', '30904320688', 'fabio.asilvaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(10, 'Pessoa fisica', 'Fabio Araujo da Silva', '309043206388', 'fabio.asilvaaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(12, 'Pessoa fisica', 'Fabio Araujo da Silva', '3090432036388', 'fabio.asilvaaaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(14, 'Pessoa fisica', 'Fabio Araujo da Silva', '309043036388', 'fabioa.asilvaaaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(15, 'Pessoa fisica', 'Fabio Araujo da Silva', '3090430363886', 'fabioa.asilvaaaaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(16, 'Pessoa fisica', 'Fabio Araujo da Silva', '30904303638863', 'fabioa.asilvaaaaaaqaq@r7.com', '41881718', NULL, 6327320, 'Rua Americana', 142, 'apto 52 A', 'sp', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(17, 'Pessoa fisica', 'Fabio Araujo da Silva', '123541', 'asdf@tsd', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(19, 'Pessoa fisica', 'Fabio Araujo da Silva', '1235416', 'asdf@tsda', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(20, 'Pessoa fisica', 'Fabio Araujo da Silva', '12354163', 'asdf@tsdaa', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(21, 'Pessoa fisica', 'Fabio Araujo da Silva', '123541633', 'asdf@tsdaab', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(22, 'Pessoa fisica', 'Fabio Araujo da Silva', '1235416333', 'asdf@tsdaabc', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(24, 'Pessoa fisica', 'Fabio Araujo da Silva', '12354163332', 'asdf@tsdaabcs', '41881718', NULL, 12345678, 'rua teste testando form', 142, 'apto 52 A', 'pi', NULL, '2015-07-02', '0000-00-00 00:00:00', 1),
(25, 'Pessoa fisica', '', '', '', '', NULL, 0, '', 0, '', 'estado', NULL, '2015-07-03', '0000-00-00 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
