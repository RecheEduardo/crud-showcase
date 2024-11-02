<?php 
include '../../Login/db_conection.php';

$produto = $_POST['pedidos']['produto_pedido'];
$quantidade = $_POST['pedidos']['produto_quantidade'];
$endereco = $_POST['pedidos']['endereco_pedido'];
$comprador = $_POST['pedidos']['usuario_pedido'];


$sql = "INSERT INTO `pedidos` (`produto_pedido`, `produto_quantidade`, `endereco_pedido` , `usuario_pedido`) 
VALUES ('$produto', '$quantidade', '$endereco' , '$comprador');";

if ($connection->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

header('Location: ../ordersList/ordersList.php');

$connection->close();