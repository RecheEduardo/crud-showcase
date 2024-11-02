<?php

include '../../Login/db_conection.php';

$id = $_GET['pedido_id'];

$sql = "DELETE FROM pedidos WHERE pedido_id = $id";

$connection->query($sql);

header('Location: ../ordersList/ordersList.php');

$connection->close();