<?php 

$host = 'localhost';
$username = 'root';
$senha = '';
$database = 'edudatabase';

$connection = new mysqli($host, $username, $senha, $database);

if($connection->error){
    die('Não foi possível realizar a conexão: ' . $connection->error);
}