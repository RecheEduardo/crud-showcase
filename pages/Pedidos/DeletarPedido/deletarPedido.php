<?php

include '../../Login/conexaoDB.php';

$id = $_GET['pedido_id'];

$sql = "DELETE FROM pedidos WHERE pedido_id = $id";

$connection->query($sql);

header('Location: ../ListaPedidos/listaPedidos.php');

$connection->close();