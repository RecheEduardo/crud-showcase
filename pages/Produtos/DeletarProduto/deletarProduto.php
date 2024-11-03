<?php

include '../../Login/conexaoDB.php';

$id = $_GET['produto_id'];

$sql = "DELETE FROM produtos WHERE produto_id = $id";

$connection->query($sql);

header('Location: ../ListaProdutos/listaProdutos.php');

$connection->close();