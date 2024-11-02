<?php

include '../../Login/db_conection.php';

$id = $_GET['produto_id'];

$sql = "DELETE FROM produtos WHERE produto_id = $id";

$connection->query($sql);

header('Location: ../productsList/productsList.php');

$connection->close();