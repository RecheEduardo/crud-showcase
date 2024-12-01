<?php

include '../../Login/conexaoDB.php';

$id = $_GET['produto_id'];

$nome = $_POST['produtos']['produto_nome'];
$preco = $_POST['produtos']['produto_preco'];
$descricao = $_POST['produtos']['produto_descricao'];
$imagem = $_POST['produtos']['produto_imagem'];

$sql = "UPDATE `produtos` SET `produto_nome` = '$nome', `produto_preco` = '$preco', `produto_descricao` = '$descricao', `produto_imagem` = '$imagem' WHERE `produtos`.`produto_id` = $id;";

$connection->query($sql);

$connection->close();
header('Location: ../ListaProdutos/listaProdutos.php');
