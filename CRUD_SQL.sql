CREATE DATABASE IF NOT EXISTS `edudatabase`;
USE `edudatabase`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admins` (`id`, `nome`, `email`, `senha`) VALUES
(10, 'Eduardo', 'Eduardo@gmail.com', '123'),
(11, 'Usuário Teste', 'teste@email.com', '1234');

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
(16, '2024-11-30 23:30:16', 16, 6, 'Rua Iacanga 124, Vila Maria, São Paulo - SP', 389),
(17, '2024-11-30 23:35:26', 17, 2, 'Rua Maria de Lourdes, 133, Vila Gustavo, São Paulo - SP', 388),
(18, '2024-12-01 02:46:00', 15, 1, 'Avenida Paulo Faccini, 807, Centro, Guarulhos - SP', 392);

CREATE TABLE `produtos` (
  `produto_id` int(11) NOT NULL,
  `produto_nome` varchar(255) NOT NULL,
  `produto_preco` float NOT NULL,
  `produto_descricao` varchar(255) NOT NULL,
  `produto_imagem` varchar(5000) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `produtos` (`produto_id`, `produto_nome`, `produto_preco`, `produto_descricao`, `produto_imagem`, `createdAt`, `updatedAt`) VALUES
(15, 'Chanel Nº5 Eau de Parfum', 925.5, 'Um perfume floral icônico com notas de aldeídos e ylang-ylang.', 'https://www.chanel.com/images//t_one//w_0.51,h_0.51,c_crop/q_auto:good,f_autoplus,fl_lossy,dpr_1.1/w_1240/n-5-eau-de-parfum-spray-3-4fl-oz--packshot-default-125530-9539148742686.jpg', '2024-11-30 23:23:54', '2024-12-01 02:47:03'),
(16, 'Dior Sauvage Eau de Toilette', 1109.5, 'Uma fragrância fresca com notas de bergamota e ambroxan.', 'https://epocacosmeticos.vteximg.com.br/arquivos/ids/626106/3348901728836-3348901728829--2-.jpg?v=638633240319130000', '2024-11-30 23:23:54', '2024-12-01 03:14:02'),
(17, 'Lancôme La Vie Est Belle', 569.9, 'Uma mistura doce de íris, patchouli e baunilha.', 'https://epocacosmeticos.vteximg.com.br/arquivos/ids/577799/3605532612690-30ml--2-.jpg?v=638349532597930000', '2024-11-30 23:23:54', '2024-12-01 02:47:26'),
(18, 'Gucci Bloom Eau de Parfum', 768.8, 'Um perfume floral intenso com notas de jasmim e tuberosa.', 'https://epocacosmeticos.vteximg.com.br/arquivos/ids/546127-800-800/gucci-bloom.jpg?v=638179395546030000', '2024-11-30 23:23:54', '2024-12-01 03:14:18');

ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido_id`);

ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_id`);

ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `clientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

ALTER TABLE `pedidos`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

ALTER TABLE `produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

COMMIT;
