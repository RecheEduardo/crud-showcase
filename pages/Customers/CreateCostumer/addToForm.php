<?php 
include '../../Login/db_conection.php';

$nome = $_POST['clientes']['nome'];
$idade = $_POST['clientes']['idade'];
$email = $_POST['clientes']['email'];

$sql = "INSERT INTO `clientes` (`nome`, `idade`, `email`) 
VALUES ('$nome', '$idade', '$email');";

if ($connection->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

header('Location: ../CostumersList/costumersList.php');

$connection->close();