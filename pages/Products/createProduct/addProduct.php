<?php 
include '../../Login/db_conection.php';

$nome = $_POST['produtos']['produto_nome'];
$idade = $_POST['produtos']['produto_preco'];
$email = $_POST['produtos']['produto_descricao'];

$sql = "INSERT INTO `produtos` (`produto_nome`, `produto_preco`, `produto_descricao`) 
VALUES ('$nome', '$idade', '$email');";

if ($connection->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

header('Location: ../productsList/productsList.php');

$connection->close();