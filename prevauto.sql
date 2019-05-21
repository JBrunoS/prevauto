-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 21-Maio-2019 às 00:54
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prevauto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_veiculos`
--

DROP TABLE IF EXISTS `saida_veiculos`;
CREATE TABLE IF NOT EXISTS `saida_veiculos` (
  `id_saida` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  PRIMARY KEY (`id_saida`),
  KEY `id_empresa` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicosrealizados`
--

DROP TABLE IF EXISTS `servicosrealizados`;
CREATE TABLE IF NOT EXISTS `servicosrealizados` (
  `id_servicos_realizados` int(11) NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(55) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_servico` date NOT NULL,
  `quilometragem` int(11) NOT NULL,
  PRIMARY KEY (`id_servicos_realizados`),
  UNIQUE KEY `id_servico` (`nome_servico`),
  UNIQUE KEY `id_servico_3` (`nome_servico`),
  KEY `IDservico` (`nome_servico`),
  KEY `IDVeiculo` (`id_veiculo`),
  KEY `IDUsuario` (`id_usuario`),
  KEY `id_servico_2` (`nome_servico`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(55) NOT NULL,
  `nome_usuario` varchar(150) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `motorista` varchar(4) NOT NULL,
  `cnh` varchar(25) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `permissao` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_empresa` (`empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `empresa`, `nome_usuario`, `cpf`, `motorista`, `cnh`, `telefone`, `email`, `senha`, `permissao`) VALUES
(1, 'PrevAuto controle de frotas', 'JoÃ£o Bruno Sousa', 60522479324, 'on', '0', '87306182', 'j_bruno_s@hotmail.com', 'joao', ''),
(2, 'Ruth Modas', 'Ruth Rocha Lima Rodrigues', 333333, 'on', '90909', '85996223018', 'ruthrochal@hotmail.com', 'senha', 'SIM'),
(3, 'Lanchonete Moreira', 'Bruno Sousa', 60522479324, 'on', '09090909090909', '87306182', 'joaobruno.sousa@yahoo.com', 'senha', 'NÃ‚O'),
(4, 'kkkkkkk', 'Eliude Rocha', 0, 'on', '090912212', '87666612', 'lia@lia.com', '1222', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `ano_fabricacao` varchar(45) NOT NULL,
  `combustivel` varchar(45) NOT NULL,
  `especie` varchar(45) NOT NULL,
  `ano_modelo` varchar(45) NOT NULL,
  `numero_chassi` varchar(45) NOT NULL,
  `numero_motor` varchar(45) NOT NULL,
  `cor` varchar(45) NOT NULL,
  `placa` varchar(45) NOT NULL,
  `renavan` varchar(45) NOT NULL,
  `quilometragem` varchar(45) NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  KEY `id_empresa` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `id_usuario`, `marca`, `tipo`, `ano_fabricacao`, `combustivel`, `especie`, `ano_modelo`, `numero_chassi`, `numero_motor`, `cor`, `placa`, `renavan`, `quilometragem`) VALUES
(7, 1, 'Pajero', 'particular', '01/01/2011 2:59 PM', 'DIESEL', 'passageiro', '01/02/2012 2:59 PM', '887778', '87877655', 'pRETO', 'ocn-1427', '888888', '100.000');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `saida_veiculos`
--
ALTER TABLE `saida_veiculos`
  ADD CONSTRAINT `saida_veiculos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `servicosrealizados`
--
ALTER TABLE `servicosrealizados`
  ADD CONSTRAINT `servicosrealizados_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `servicosrealizados_ibfk_3` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculos` (`id_veiculo`);

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
