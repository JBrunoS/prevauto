-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 24-Abr-2019 às 17:59
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
  `id_motorista` int(11) NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  PRIMARY KEY (`id_saida`),
  KEY `id_motorista` (`id_motorista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `IDServicos` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(140) NOT NULL,
  `KilometragemMaxima` int(11) NOT NULL,
  `TempoMaximo` int(11) NOT NULL,
  PRIMARY KEY (`IDServicos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicosrealizados`
--

DROP TABLE IF EXISTS `servicosrealizados`;
CREATE TABLE IF NOT EXISTS `servicosrealizados` (
  `IDServicosRealizados` int(11) NOT NULL AUTO_INCREMENT,
  `IDservico` int(11) NOT NULL,
  `IDVeiculo` int(11) NOT NULL,
  `IDUsuario` int(11) NOT NULL,
  `dataServivo` date NOT NULL,
  `Kilometragem` int(11) NOT NULL,
  PRIMARY KEY (`IDServicosRealizados`),
  KEY `IDservico` (`IDservico`),
  KEY `IDVeiculo` (`IDVeiculo`),
  KEY `IDUsuario` (`IDUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `NomeUsuario` varchar(150) NOT NULL,
  `CPF` int(11) NOT NULL,
  `motorista` tinyint(1) NOT NULL,
  `CNH` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `IDVeiculo` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `AnoFabricacao` int(11) NOT NULL,
  `combustivel` varchar(45) NOT NULL,
  `Especie` varchar(45) NOT NULL,
  `AnoModelo` int(11) NOT NULL,
  `NumeroChassi` int(11) NOT NULL,
  `NumeroMotor` int(11) NOT NULL,
  `Cor` varchar(45) NOT NULL,
  `placa` varchar(45) NOT NULL,
  `renavan` int(11) NOT NULL,
  `Kilometragem` int(11) NOT NULL,
  PRIMARY KEY (`IDVeiculo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `saida_veiculos`
--
ALTER TABLE `saida_veiculos`
  ADD CONSTRAINT `saida_veiculos_ibfk_1` FOREIGN KEY (`id_motorista`) REFERENCES `usuario` (`IdUsuario`);

--
-- Limitadores para a tabela `servicosrealizados`
--
ALTER TABLE `servicosrealizados`
  ADD CONSTRAINT `servicosrealizados_ibfk_1` FOREIGN KEY (`IDservico`) REFERENCES `servicos` (`IDServicos`),
  ADD CONSTRAINT `servicosrealizados_ibfk_2` FOREIGN KEY (`IDUsuario`) REFERENCES `usuario` (`IdUsuario`),
  ADD CONSTRAINT `servicosrealizados_ibfk_3` FOREIGN KEY (`IDVeiculo`) REFERENCES `veiculos` (`IDVeiculo`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `saida_veiculos` (`id_motorista`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
