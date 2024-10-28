<?php 
include '../Login/db_conection.php';

$nome = $_POST['pessoa']['nome'];
$idade = $_POST['pessoa']['idade'];
$email = $_POST['pessoa']['email'];

$sql = "INSERT INTO `pessoa` (`nome`, `idade`, `email`) 
VALUES ('$nome', '$idade', '$email');";

if ($connection->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

header('Location: ../CostumersList/costumersList.php');

$connection->close();