<?php

include '../../Login/conexaoDB.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

$connection->query($sql);

header('Location: ../ListaClientes/listaClientes.php');

$connection->close();