-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 09/06/2021 às 15:19
-- Versão do servidor: 10.4.18-MariaDB
-- Versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adm_tassi`
--
CREATE DATABASE IF NOT EXISTS `adm_tassi` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `adm_tassi`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `idClass` int(11) NOT NULL AUTO_INCREMENT,
  `ableClass` int(1) NOT NULL,
  `year` year(4) NOT NULL,
  `level` varchar(40) NOT NULL,
  `series` int(2) NOT NULL,
  `shift` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idClass`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `classes`
--

INSERT INTO `classes` (`idClass`, `ableClass`, `year`, `level`, `series`, `shift`) VALUES
(1, 1, 2020, 'Ensino Superior', 7, 'Integral'),
(4, 0, 2019, 'Ensino Médio', 3, 'Diurno'),
(5, 0, 1988, 'Ensino Superior', 7, 'Integral'),
(6, 0, 1999, 'Ensino Superior', 5, 'Noturno'),
(7, 1, 2007, 'Ensino Fundamental', 6, 'Noturno'),
(8, 0, 2000, 'Ensino Superior', 4, 'Diurno'),
(9, 0, 2003, 'Tecnico', 2, 'Noturno'),
(10, 1, 2018, 'Ensino Médio', 3, 'Integral'),
(11, 1, 2018, 'Ensino Médio', 3, 'Integral'),
(12, 0, 1998, 'Ensino Superior', 7, 'Integral'),
(13, 0, 1999, 'Ensino Fundamental', 4, 'Diurno'),
(14, 0, 1998, 'Ensino Médio', 6, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relationship_classes_schools`
--

DROP TABLE IF EXISTS `relationship_classes_schools`;
CREATE TABLE IF NOT EXISTS `relationship_classes_schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idClass` int(11) DEFAULT NULL,
  `idSchool` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idSchool` (`idSchool`),
  KEY `idClass` (`idClass`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `relationship_classes_schools`
--

INSERT INTO `relationship_classes_schools` (`id`, `idClass`, `idSchool`) VALUES
(3, 1, 1),
(4, 10, 1),
(5, 11, 2),
(6, 7, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `relationship_students_classes`
--

DROP TABLE IF EXISTS `relationship_students_classes`;
CREATE TABLE IF NOT EXISTS `relationship_students_classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idStudent` int(11) DEFAULT NULL,
  `idClass` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idStudent` (`idStudent`),
  KEY `idClass` (`idClass`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `relationship_students_classes`
--

INSERT INTO `relationship_students_classes` (`id`, `idStudent`, `idClass`) VALUES
(6, 1, 1),
(7, 3, 1),
(8, 7, 1),
(9, 6, 11),
(10, 4, 10),
(11, 5, 7),
(12, 9, 7),
(13, 8, 10),
(14, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `idSchool` int(11) NOT NULL AUTO_INCREMENT,
  `ableSchool` int(1) NOT NULL,
  `nameSchool` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`idSchool`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `schools`
--

INSERT INTO `schools` (`idSchool`, `ableSchool`, `nameSchool`, `address`) VALUES
(1, 1, 'Instituto Federal Sul de Minas', 'Av. Dirce Pereira Rosa, 300'),
(2, 1, 'Colégio Pelicano', 'R. Minas Gerais, 334 - Centro'),
(3, 0, 'Universidade de São Paulo', 'Butanta, São Paulo - SP'),
(4, 0, 'Universidade Federal de Minas Gerais', 'Av. Pres. Antônio Carlos, 6627 '),
(5, 0, 'Colégio COC Sete de Setembro', 'R. Ceará, 321 - Centro'),
(7, 0, 'Instituto Federal', 'aaa');

-- --------------------------------------------------------

--
-- Estrutura para tabela `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `idStudent` int(10) NOT NULL AUTO_INCREMENT,
  `ableStudent` int(1) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `birthday` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idStudent`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `students`
--

INSERT INTO `students` (`idStudent`, `ableStudent`, `name`, `phone`, `email`, `birthday`, `gender`) VALUES
(1, 1, 'Gabriel Azevedo', '35 98883-XXXX', 'azevgabriel@gmail.com', '1999-06-01', 'Masculino'),
(3, 1, 'Anais Moutinho Portoo', '(35) 9.8765-4579', 'anais_porto@gmail.com', '1995-01-26', 'Feminino'),
(4, 1, 'Stéphanie Pardo Bonilha', '35 988716574', 'steph_pard@gmail.com', '1999-12-01', 'Feminino'),
(5, 1, 'Daiane Matins', '35 986578456', 'daimartins@gmail.com', '1995-02-27', 'Feminino'),
(6, 1, 'Jessie Bivar Caçoilo', '(35) 9.9865-1254', 'jessiebivar95@gmail.com', '1995-09-29', 'Feminino'),
(7, 1, 'Bruna Castanho Mourato', '(35) 9.8885-4875', 'brunamourato@hotmail.com', '1995-01-26', 'Feminino'),
(8, 1, 'Roberto Carlos', '(35) 9.8754-5698', 'contato.roberto@gmail.com', '1995-06-15', 'Masculino'),
(9, 1, 'Joaquim Barbosa', '35 98886-5487', 'joaquimBarba@gmail.com', '1999-03-20', 'Masculino'),
(10, 0, 'Damaris', '35988540000', 'dama1natura@gmail.com', '1999-05-01', 'Feminino'),
(11, 0, 'Gabriel Azevedo', '35 988835605', 'alunos@alunos.com', '1999-05-01', 'Masculino'),
(13, 0, 'Reginaldo Roberto', '', 'Re@gmail.com', '', '');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `relationship_classes_schools`
--
ALTER TABLE `relationship_classes_schools`
  ADD CONSTRAINT `relationship_classes_schools_ibfk_1` FOREIGN KEY (`idSchool`) REFERENCES `schools` (`idSchool`),
  ADD CONSTRAINT `relationship_classes_schools_ibfk_2` FOREIGN KEY (`idClass`) REFERENCES `classes` (`idClass`);

--
-- Restrições para tabelas `relationship_students_classes`
--
ALTER TABLE `relationship_students_classes`
  ADD CONSTRAINT `relationship_students_classes_ibfk_1` FOREIGN KEY (`idStudent`) REFERENCES `students` (`idStudent`),
  ADD CONSTRAINT `relationship_students_classes_ibfk_2` FOREIGN KEY (`idClass`) REFERENCES `classes` (`idClass`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
