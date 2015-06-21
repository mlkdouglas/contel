-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 21-Jun-2015 às 09:32
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
-- Estrutura da tabela `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `tabledef` varchar(32) NOT NULL,
  `fieldid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `creationdate` date NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
