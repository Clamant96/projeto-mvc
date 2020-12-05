-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2020 às 15:25
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `situacao` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `senha`, `situacao`) VALUES
(1, 'Kevin Alec', 'neri.kevin96@gmail.com', '123', 1),
(2, 'Help Connect', 'kevin.helpconnect@gmail.com', '123', 1),
(3, 'Ingrid Karen', 'ingridkneri@hotmail.com', '123', 1),
(13, 'Erick Kaik Neri Lazzarotto', 'erick.clamant@gmail.com', '321', 1),
(54, 'Teste 3', 'teste3@gmail.com', '123', 0),
(55, 'Teste 4', 'teste4@gmail.com', '123', 0),
(56, 'teste1', 'teste1@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem`
--

CREATE TABLE `tb_mensagem` (
  `id` int(11) NOT NULL,
  `texto` varchar(500) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_mensagem`
--

INSERT INTO `tb_mensagem` (`id`, `texto`, `email`) VALUES
(1, 'Teste de texto teste', 'kevin@gmail.com'),
(2, 'teste', 'kevin@gmail.com'),
(3, 'teste', 'kevin@gmail.com'),
(4, 'Ola, meu no nome e Kevin, gostaria de realizar uma cotação para um site responsivo somente para divulgação.\r\nFico no aguardo, obrigado. ', 'neri.kevin96@gmail.com'),
(5, 'Teste de email', 'kevin.lazzarotto@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `descricao`, `preco`, `img`) VALUES
(1, 'Layout Personalizado Pizzaria', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários, serviço de Pizzaria.', 100.00, 'construcao.png'),
(4, 'Layout Personalizado Loja Escritorio', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários, serviço de Loja Escritorio.', 150.00, 'paisagem.png'),
(20, 'Layout Responsivo Padrao', 'Layout responsivo padrão sendo uns de novos modelos disponíveis em nosso estoque, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuários.', 150.00, 'covid-19.png'),
(21, 'Combo, Layout, Banner e Cartão de Visitas', 'Layout responsivo padrão, Banner decorado de acordo com o ramo da empresa e desenvolvimento de cartão de visitas com a finalidade de divulgação da marca.', 400.00, 'meu-cep.png'),
(26, 'Layout Teste', 'Teste de layout para verificar se a logica com o banco de dados esta funcionando caorretamento', 1500.00, 'viagem.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
