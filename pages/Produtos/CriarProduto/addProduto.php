<?php 
include '../../Login/conexaoDB.php';

$nome = $_POST['produtos']['produto_nome'];
$idade = $_POST['produtos']['produto_preco'];
$email = $_POST['produtos']['produto_descricao'];
$imagem = $_POST['produtos']['produto_imagem'];

$sql = "INSERT INTO `produtos` (`produto_nome`, `produto_preco`, `produto_descricao`, `produto_imagem`) 
VALUES ('$nome', '$idade', '$email' , '$imagem');";

if ($connection->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $connection->error;
}

header('Location: ../ListaProdutos/listaProdutos.php');

$connection->close();