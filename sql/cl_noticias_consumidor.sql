-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 21-Jun-2015 às 07:52
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cl_noticias_consumidor`
--

CREATE TABLE IF NOT EXISTS `cl_noticias_consumidor` (
  `not_id` int(5) NOT NULL AUTO_INCREMENT,
  `not_titulo` varchar(100) NOT NULL,
  `not_link` varchar(200) NOT NULL,
  `not_descricao` mediumtext NOT NULL,
  `not_noticia` text NOT NULL,
  `not_criationdate` date NOT NULL,
  `not_modifidate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `not_imagem` varchar(200) NOT NULL,
  `not_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cl_noticias_consumidor`
--

INSERT INTO `cl_noticias_consumidor` (`not_id`, `not_titulo`, `not_link`, `not_descricao`, `not_noticia`, `not_criationdate`, `not_modifidate`, `not_imagem`, `not_status`) VALUES
(3, 'tresrrwetwertwer yyyygg', 'wert', 'wertwert', 'wert', '0000-00-00', '2015-06-21 05:27:41', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
