<?php

include '../../Login/db_conection.php';

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";

$connection->query($sql);

header('Location: ../CostumersList/costumersList.php');

$connection->close();