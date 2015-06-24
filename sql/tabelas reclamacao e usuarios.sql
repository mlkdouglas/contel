
--
-- Estrutura da tabela `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocol` varchar(200) NOT NULL,
  `related` varchar(100) NOT NULL,
  `complaint` mediumtext NOT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `createdby` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


-- --------------------------------------------------------

--
-- Estrutura da tabela `define_complaint`
--

CREATE TABLE IF NOT EXISTS `define_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `define_complaint`
--

INSERT INTO `define_complaint` (`id`, `title`) VALUES
(1, 'Pessoa fisica'),
(2, 'Pessoa juridica'),
(3, 'Associação / sindicato'),
(4, 'Problemas coletivos'),
(5, 'Orgão publicos'),
(6, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `define` varchar(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cpf` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(35) DEFAULT NULL,
  `zipcode` int(11) NOT NULL,
  `address` varchar(35) NOT NULL,
  `state` varchar(60) NOT NULL,
  `birth` date DEFAULT NULL,
  `creationdate` date NOT NULL,
  `modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `user`
--
