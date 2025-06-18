-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/06/2025 às 02:13
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `producao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`idProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nome`, `descricao`, `preco`) VALUES
(1, 'Camiseta Box', 'Camiseta Box Tech Eco oversized faz parte da nossa nova linha Unknown. Ela tem um comprimento mais curto, torax mais largo e o ombro caído, clássico da modelagem oversized. Gola levemente fechada. O diferencial dela é o caimento perfeito do tecido de viscose mais a modelagem mais curta. Ela é confeccionada em viscose Lenzing Ecovero, garantindo um caimento e um toque premium, com gramatura pesada de 300g/m². Não é uma peça quente, ideal para qualquer dia. Não desbota com o tempo. Anti-odor. Maciez extrema. Caimento perfeito. Design exclusivo.', 139.90),
(2, 'Camiseta Oversized', 'A Camiseta Aleska é feita em 100% algodão, com uma trama única em formato de pequenos quadrados que evocam a fluidez do oceano. Modelagem oversized, visual moderno e despojado, com gramatura de 230 g/m². Leve, respirável e confortável. Bordado sofisticado que traduz a essência da sorte.', 159.90),
(3, 'Camiseta Alongada', 'A Camiseta Oversized Masculina de Algodão Premium que Não Encolhe oferece conforto, estilo e durabilidade. Com design moderno e corte oversized, proporciona um caimento solto e despojado. Feita com algodão puro e premium, proporciona maciez e resistência, mantendo a forma e cor após muitas lavagens.', 149.90),
(4, 'Regata gola V', 'A Regata Masculina Gola V combina estilo e funcionalidade. Feita com algodão e elastano, oferece toque macio, elasticidade e ajuste impecável. Design moderno com gola V e detalhes em corte a laser. Versátil para praia, churrasco ou look urbano casual.', 129.90),
(5, 'Moletom Gola Alta', 'O Casaco Moletom Gola Alta Oversized é ideal para o inverno. Gola alta para proteção extra e corte oversized para visual moderno. Confeccionado em moletom felpado 100% algodão, é macio, quentinho e durável. Combina com diversos looks.', 229.90),
(6, 'Moletom', 'Moletom com modelagem blusão e caimento solto. Confortável e estiloso, com toque suave e quentinho. Tecido de alta qualidade e cor Bege Marfim. Moda funcional com estética refinada. Composição: 84% algodão, 13% poliéster, 3% elastano.', 199.90),
(7, 'Bermuda', 'Bermuda em sarja com elastano. Bolsos faca frontais e bolsos traseiros embutidos com botões. Tecido flexível e versátil, ideal com camisas ou camisetas. Pré-encolhida. Composição: 98% Algodão BCI, 2% Elastano. Etiqueta em cetim para conforto.', 179.90),
(8, 'Bermuda Alfaiatada', 'Bermuda com modelagem reta e caimento solto. Tecido leve, durável e que seca rápido. Composição: 93% Poliéster Reciclado, 7% Elastano. Possui bolsos com zíper, é confortável e não amassa facilmente. Ideal para looks casuais.', 189.90),
(9, 'Calça Reta', 'Calça de sarja com algodão egípcio e elastano. Modelagem reta com bolsos faca e traseiros embutidos. Cores vivas e durabilidade garantidas. Sarja Premium, com toque macio e costuras reforçadas. Composição: 97% Algodão Egípcio, 3% Elastano.', 239.90),
(10, 'Calça Jogger com Amarração', 'Calça jogger masculina feita em sarja com algodão e elastano. Cós elástico com cordão de amarração, bolsos faca, bolsos cargo e posteriores. Barra com punho elástico. Ideal para o dia a dia com estilo e conforto. Composição: 98% Algodão, 2% Elastano.', 309.90);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
