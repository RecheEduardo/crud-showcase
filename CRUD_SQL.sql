CREATE DATABASE edudatabase;

USE DATABASE edudatabase;

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admins` (`id`, `nome`, `email`, `senha`) VALUES
(10, 'Eduardo', 'Eduardo@gmail.com', '123');


CREATE TABLE `clientes` (
  `id` int(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idade` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `clientes` (`id`, `nome`, `idade`, `email`, `created_at`) VALUES
(382, 'Eduardo', 28, 'Eduardo@hotmail.com', '2024-11-03 14:30:31'),
(385, 'Danilo', 25, 'Danilo@gmail.com', '2024-11-03 14:30:31'),
(387, 'Joana', 25, 'Joana@hotmail.com', '2024-11-03 16:09:09'),
(388, 'Maria Silva', 30, 'maria.silva@example.com', '2024-11-03 18:00:00'),
(389, 'Carlos Oliveira', 22, 'carlos.oliveira@example.com', '2024-11-03 18:05:00'),
(390, 'Ana Beatriz', 35, 'ana.beatriz@example.com', '2024-11-03 18:10:00'),
(391, 'Pedro Almeida', 27, 'pedro.almeida@example.com', '2024-11-03 18:15:00'),
(392, 'Laura Costa', 29, 'laura.costa@example.com', '2024-11-03 18:20:00');


CREATE TABLE `pedidos` (
  `pedido_id` int(11) NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT current_timestamp(),
  `produto_pedido` int(11) NOT NULL,
  `produto_quantidade` int(11) NOT NULL,
  `endereco_pedido` varchar(255) NOT NULL,
  `usuario_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pedidos` (`pedido_id`, `data_pedido`, `produto_pedido`, `produto_quantidade`, `endereco_pedido`, `usuario_pedido`) VALUES
(1, '2024-11-02 22:34:41', 7, 15, 'Rua Iacanga 124', 382),
(7, '2024-11-03 01:34:41', 1, 2, 'Rua da Alegria, 100', 378),
(8, '2024-11-03 01:35:00', 2, 1, 'Av. Brasil, 500', 379),
(9, '2024-11-03 01:36:00', 3, 3, 'Rua das Flores, 250', 382),
(10, '2024-11-03 01:37:00', 4, 1, 'Rua do Sol, 10', 385),
(11, '2024-11-03 01:38:00', 5, 4, 'Praça da Liberdade, 30', 378),
(12, '2024-11-03 16:28:37', 9, 25, 'Rua Iacanga, 124', 392),
(13, '2024-11-03 16:31:03', 13, 12, 'Rua da Liberdade, 1', 389),
(14, '2024-11-03 16:33:48', 12, 16, 'Rua do Canal, 345', 388),
(15, '2024-11-03 16:39:57', 11, 45, 'Praça do Imperador, 1243', 390);


CREATE TABLE `produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `produto_preco` float NOT NULL,
  `produto_descricao` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtos` (`produto_id`, `produto_nome`, `produto_preco`, `produto_descricao`, `createdAt`, `updatedAt`) VALUES
(9, 'Carrinho Hot Wheels', 79.99, 'Carrinho Hot Wheels em miniatura', '2024-11-03 01:29:04', '2024-11-03 16:36:37'),
(10, 'Pista de Corrida', 150, 'Pista de corrida Hot Wheels com curvas', '2024-11-03 01:30:00', '2024-11-03 16:20:00'),
(11, 'Conjunto de Blocos de Montar', 120, 'Conjunto com 300 blocos de montar', '2024-11-03 01:31:00', '2024-11-03 16:30:00'),
(12, 'Boneco de Ação', 45, 'Boneco de ação de super-herói', '2024-11-03 01:32:00', '2024-11-03 16:40:00'),
(13, 'Jogo de Tabuleiro', 99, 'Jogo de tabuleiro divertido para família', '2024-11-03 01:33:00', '2024-11-03 16:50:00');


ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido_id`);


ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_id`);


ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `clientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;


ALTER TABLE `pedidos`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


ALTER TABLE `produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;
