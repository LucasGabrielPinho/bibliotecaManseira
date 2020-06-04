-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Maio-2020 às 00:16
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigos`
--

CREATE TABLE `amigos` (
  `amiCodigo` int(11) NOT NULL,
  `amiNome` varchar(50) COLLATE utf8_bin NOT NULL,
  `amiEmail` varchar(50) COLLATE utf8_bin NOT NULL,
  `amiTelefone` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `amigos`
--

INSERT INTO `amigos` (`amiCodigo`, `amiNome`, `amiEmail`, `amiTelefone`) VALUES
(1, 'Bastiao', 'bastiao@bol.com.br', '123456789'),
(3, 'ze', 'ze@uol.com.br', '123456'),
(4, 'Bruna', 'bruna.furtado@bol.com.br', '4449975646');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `empCodigo` int(11) NOT NULL,
  `empDataEmp` char(10) COLLATE utf8_bin NOT NULL,
  `empDataDev` char(10) COLLATE utf8_bin NOT NULL,
  `livCodigo` int(11) NOT NULL,
  `amiCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`empCodigo`, `empDataEmp`, `empDataDev`, `livCodigo`, `amiCodigo`) VALUES
(1, '2020-05-01', '', 2, 1),
(2, '02/05/2020', '', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `genCodigo` int(11) NOT NULL,
  `genNome` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`genCodigo`, `genNome`) VALUES
(1, 'Idiomas'),
(2, 'Programacao'),
(3, 'Religioso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `livCodigo` int(11) NOT NULL,
  `livTitulo` varchar(80) COLLATE utf8_bin NOT NULL,
  `livAutor` varchar(255) COLLATE utf8_bin NOT NULL,
  `livPaginas` int(11) NOT NULL,
  `genCodigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`livCodigo`, `livTitulo`, `livAutor`, `livPaginas`, `genCodigo`) VALUES
(1, 'InglÃªs BÃ¡sico', 'AlguÃ©m inglÃªs', 972, 1),
(2, 'HTML', 'Programador', 387, 2),
(3, 'BÃ­blia', 'Deus', 2000, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuCodigo` int(11) NOT NULL,
  `usuNome` varchar(80) COLLATE utf8_bin NOT NULL,
  `usuEmail` varchar(80) COLLATE utf8_bin NOT NULL,
  `usuLogin` varchar(15) COLLATE utf8_bin NOT NULL,
  `usuSenha` varchar(15) COLLATE utf8_bin NOT NULL,
  `usuTipo` char(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuCodigo`, `usuNome`, `usuEmail`, `usuLogin`, `usuSenha`, `usuTipo`) VALUES
(1, 'Xunda Selbetti Jontex Fraldao', 'xunda@bol.com.br', 'xunda', 'teste', 'A'),
(2, 'Bastião Antonio Silveira Silva', 'bastiao@terra.com.br', 'bastiao', 'teste', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`amiCodigo`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`empCodigo`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`genCodigo`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`livCodigo`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuCodigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amigos`
--
ALTER TABLE `amigos`
  MODIFY `amiCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `empCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `genCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `livCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
