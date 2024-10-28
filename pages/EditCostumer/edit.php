<?php

include '../Login/db_conection.php';

$id = $_GET['id'];

$nome = $_POST['pessoa']['nome'];
$idade = $_POST['pessoa']['idade'];
$email = $_POST['pessoa']['email'];

$sql = "UPDATE `pessoa` SET `nome` = '$nome', `idade` = '$idade', `email` = '$email' WHERE `pessoa`.`id` = $id;";

$connection->query($sql);

$connection->close();
header('Location: ../CostumersList/costumersList.php');
