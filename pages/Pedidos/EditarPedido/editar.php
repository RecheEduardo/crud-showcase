<?php

include '../../Login/conexaoDB.php';

$id = $_GET['pedido_id'];

$produto = $_POST['pedidos']['produto_pedido'];
$quantidade = $_POST['pedidos']['produto_quantidade'];
$endereco = $_POST['pedidos']['endereco_pedido'];
$comprador = $_POST['pedidos']['usuario_pedido'];

$edit_sql = "UPDATE `pedidos` SET `produto_pedido` = '$produto', `produto_quantidade` = '$quantidade', `endereco_pedido` = '$endereco', `usuario_pedido` = '$comprador' WHERE `pedidos`.`pedido_id` = $id;";

$connection->query($edit_sql);

$connection->close();
header('Location: ../ListaPedidos/listaPedidos.php');