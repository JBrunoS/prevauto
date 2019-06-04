-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 04-Jun-2019 às 01:26
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
-- Estrutura da tabela `chegada_veiculos`
--

DROP TABLE IF EXISTS `chegada_veiculos`;
CREATE TABLE IF NOT EXISTS `chegada_veiculos` (
  `id_chegada` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `quilometragem` varchar(45) NOT NULL,
  `horario` time NOT NULL,
  `user_system` int(11) NOT NULL,
  PRIMARY KEY (`id_chegada`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_veiculo` (`id_veiculo`),
  KEY `user_system` (`user_system`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chegada_veiculos`
--

INSERT INTO `chegada_veiculos` (`id_chegada`, `id_usuario`, `id_veiculo`, `quilometragem`, `horario`, `user_system`) VALUES
(1, 23, 15, '100', '23:59:00', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida_veiculos`
--

DROP TABLE IF EXISTS `saida_veiculos`;
CREATE TABLE IF NOT EXISTS `saida_veiculos` (
  `id_saida` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `horario` time NOT NULL,
  `user_system` int(11) NOT NULL,
  PRIMARY KEY (`id_saida`),
  KEY `id_empresa` (`id_usuario`),
  KEY `id_veiculo` (`id_veiculo`),
  KEY `user_system` (`user_system`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `saida_veiculos`
--

INSERT INTO `saida_veiculos` (`id_saida`, `id_usuario`, `id_veiculo`, `quilometragem`, `horario`, `user_system`) VALUES
(1, 22, 15, 1000, '00:00:00', 0),
(2, 22, 16, 1000, '00:00:00', 0),
(3, 22, 15, 1000, '00:00:00', 0),
(4, 22, 15, 1000, '23:59:00', 0),
(5, 22, 15, 1000, '23:59:00', 0),
(6, 22, 16, 75700, '06:20:00', 0),
(7, 22, 15, 1000, '23:59:00', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicosrealizados`
--

DROP TABLE IF EXISTS `servicosrealizados`;
CREATE TABLE IF NOT EXISTS `servicosrealizados` (
  `id_servicos_realizados` int(11) NOT NULL AUTO_INCREMENT,
  `id_servico` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_servico` date NOT NULL,
  `quilometragem` int(11) NOT NULL,
  `valor` double NOT NULL,
  `user_system` int(11) NOT NULL,
  PRIMARY KEY (`id_servicos_realizados`),
  UNIQUE KEY `id_servicos_realizados_2` (`id_servicos_realizados`),
  KEY `IDVeiculo` (`id_veiculo`),
  KEY `IDUsuario` (`id_usuario`),
  KEY `id_servicos_realizados` (`id_servicos_realizados`),
  KEY `id_servico` (`id_servico`),
  KEY `user_system` (`user_system`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicosrealizados`
--

INSERT INTO `servicosrealizados` (`id_servicos_realizados`, `id_servico`, `id_veiculo`, `id_usuario`, `data_servico`, `quilometragem`, `valor`, `user_system`) VALUES
(12, 1, 15, 22, '2019-12-31', 100, 99.99, 0),
(13, 1, 15, 22, '2019-01-31', 100, 0.99, 0),
(14, 3, 15, 22, '2025-10-28', 9000, 99.99, 0),
(15, 1, 15, 22, '2019-12-31', 90101, 99.99, 0),
(16, 1, 16, 22, '2003-12-31', 100, 99.99, 22),
(17, 3, 16, 22, '2017-11-30', 100, 99.99, 15),
(18, 1, 15, 24, '2019-12-31', 100, 99.99, 24),
(19, 2, 15, 25, '2019-12-31', 100, 99.99, 24),
(20, 3, 17, 28, '2019-12-31', 10, 99.99, 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos_periodicos`
--

DROP TABLE IF EXISTS `servicos_periodicos`;
CREATE TABLE IF NOT EXISTS `servicos_periodicos` (
  `id_servicos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_servico` varchar(100) CHARACTER SET latin1 NOT NULL,
  `km_troca` varchar(50) CHARACTER SET latin1 NOT NULL,
  `qtd_mes_troca` int(10) NOT NULL,
  PRIMARY KEY (`id_servicos`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos_periodicos`
--

INSERT INTO `servicos_periodicos` (`id_servicos`, `nome_servico`, `km_troca`, `qtd_mes_troca`) VALUES
(1, 'TROCA CORREIA DENTADA', '50000', 12),
(2, 'TROCA DOS DISCOS DE FREIO', '50000', 12),
(3, 'ÓLEO DO MOTOR E FILTRO -7 MIL', '7000', 12),
(4, 'ALINHAMENTO E BALANCEAMENTO E RODÍZIO DOS PNEUS', '10000', 12),
(5, 'ÓLEO DO MOTOR E FILTRO - 10 MIL', '10000', 12),
(6, 'ÓLEO DO MOTOR E FILTRO - 5 MIL', '50000', 12),
(7, 'TROCA DO FILTRO DE AR', '20000', 12),
(8, 'TROCA DO FILTRO DO AR-CONDICIONADO', '20000', 12),
(9, 'TROCA DO FILTRO DE COMBUSTÍVEL', '20000', 12),
(10, 'TROCA DAS PASTILHAS DE FREIO', '30000', 12),
(11, 'REAPERTO GERAL DA SUSPENSÃO', '30000', 12),
(12, 'TROCA DOS AMORTECEDORES', '50000', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(55) CHARACTER SET latin1 NOT NULL,
  `nome_usuario` varchar(150) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(20) CHARACTER SET latin1 NOT NULL,
  `motorista` varchar(4) CHARACTER SET latin1 NOT NULL,
  `cnh` varchar(25) CHARACTER SET latin1 NOT NULL,
  `telefone` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(45) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(45) CHARACTER SET latin1 NOT NULL,
  `permissao` varchar(10) CHARACTER SET latin1 NOT NULL,
  `user_system` int(11) NOT NULL,
  `ativo` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `id_empresa` (`empresa`),
  KEY `user_system` (`user_system`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `empresa`, `nome_usuario`, `cpf`, `motorista`, `cnh`, `telefone`, `email`, `senha`, `permissao`, `user_system`, `ativo`) VALUES
(15, 'PrevAuto controle de frotas', 'Joao Bruno Sousa', '605.224.793-24', 'on', '182988233', '87306182', 'j_bruno_s@hotmail.com', 'joao', 'SIM', 0, ''),
(22, 'PrevAuto controle de frotas', 'Ronaldo Aguiar', '093.983.933-73', 'SIM', '90888986868', '99889888', 'ronaldo@ronaldo.com', 'kkkk', 'NAO', 0, 'SIM'),
(23, 'PrevAuto controle de frotas', 'Ruth Rocha Lima Rodrigues', '004.949.494-94', 'NAO', '999999', '85996223018', 'ruthrochal@hotmail.com', 'ruth', 'NAO', 0, 'SIM'),
(24, 'PrevAuto controle de frotas', 'Joao B.', '989.889.897-98', 'NAO', '8776', '8998888', 'joaobruno.sousa@yahoo.com', 'kkk', 'NAO', 15, 'NAO'),
(25, 'PrevAuto controle de frotas', 'Davi S.', '676.667.676-76', 'NAO', '123', '9999', 'davi@davi.com', 'uuu', 'NAO', 24, 'SIM'),
(26, 'PrevAuto controle de frotas', 'Jose Ricardo Sousa', '555.555.555-55', 'NAO', '1992', '85996223018', 'ricardo@ricardo.com', 'kkk', 'NAO', 24, 'NAO'),
(27, 'Lanchonete Moreira', 'Jose Carlos Arruda', '605.224.793-24', 'on', '1992', '98327777', 'carlos@carlos.com', 'kkkk', 'SIM', 0, 'SIM'),
(28, 'Lanchonete Moreira', 'Francisco', '099.393.399-33', 'SIM', '988778', '9888889', 'francisco@francisco.com', 'kkkk', 'NAO', 27, 'SIM'),
(29, 'Ruth Modas', 'Mauricio', '1111', 'on', '8776', '85996223018', 'lia@lia.com', 'llll', 'SIM', 0, 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `marca` varchar(45) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `ano_fabricacao` varchar(45) CHARACTER SET latin1 NOT NULL,
  `combustivel` varchar(45) CHARACTER SET latin1 NOT NULL,
  `especie` varchar(45) CHARACTER SET latin1 NOT NULL,
  `ano_modelo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `numero_chassi` varchar(45) CHARACTER SET latin1 NOT NULL,
  `numero_motor` varchar(45) CHARACTER SET latin1 NOT NULL,
  `cor` varchar(45) CHARACTER SET latin1 NOT NULL,
  `placa` varchar(45) CHARACTER SET latin1 NOT NULL,
  `renavan` varchar(45) CHARACTER SET latin1 NOT NULL,
  `quilometragem` varchar(45) CHARACTER SET latin1 NOT NULL,
  `empresa` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  KEY `id_empresa` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `id_usuario`, `marca`, `tipo`, `ano_fabricacao`, `combustivel`, `especie`, `ano_modelo`, `numero_chassi`, `numero_motor`, `cor`, `placa`, `renavan`, `quilometragem`, `empresa`) VALUES
(15, 15, 'Pajero DAKAR', 'Particular', '06/02/2019 4:27 PM', 'Gasolina', 'Passageiro', '01/01/2010 4:27 PM', '876767786786', 'gjk7657786', 'Prata', 'ocn-1427', '987986898877', '0', 'PrevAuto controle de frotas'),
(16, 15, 'Kombi 92', 'Particular', '06/18/2019 4:51 PM', 'DIESEL', 'Passageiro', '06/05/2019 4:51 PM', '887778', 'gjk7657786', 'Cinza', 'ocn-1423', '888888', '90000', 'PrevAuto controle de frotas'),
(17, 27, 'Wolqsvagem', 'Particular', '06/11/2019', 'flex', 'Passageiro', '06/03/2019', '88888', '87877655', 'Vermelho', 'PQO-0909', '090011', '0', 'Lanchonete Moreira');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `chegada_veiculos`
--
ALTER TABLE `chegada_veiculos`
  ADD CONSTRAINT `chegada_veiculos_ibfk_1` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculos` (`id_veiculo`),
  ADD CONSTRAINT `chegada_veiculos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `saida_veiculos`
--
ALTER TABLE `saida_veiculos`
  ADD CONSTRAINT `saida_veiculos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `saida_veiculos_ibfk_2` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculos` (`id_veiculo`);

--
-- Limitadores para a tabela `servicosrealizados`
--
ALTER TABLE `servicosrealizados`
  ADD CONSTRAINT `servicosrealizados_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `servicosrealizados_ibfk_3` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculos` (`id_veiculo`),
  ADD CONSTRAINT `servicosrealizados_ibfk_4` FOREIGN KEY (`id_servico`) REFERENCES `servicos_periodicos` (`id_servicos`);

--
-- Limitadores para a tabela `veiculos`
--
ALTER TABLE `veiculos`
  ADD CONSTRAINT `veiculos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
