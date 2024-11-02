<?php

include '../../Login/db_conection.php';

$id = $_GET['id'];

$nome = $_POST['clientes']['nome'];
$idade = $_POST['clientes']['idade'];
$email = $_POST['clientes']['email'];

$sql = "UPDATE `clientes` SET `nome` = '$nome', `idade` = '$idade', `email` = '$email' WHERE `clientes`.`id` = $id;";

$connection->query($sql);

$connection->close();
header('Location: ../CostumersList/costumersList.php');