<?php

include '../Login/db_conection.php';

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT * FROM pessoa where id = $id";

$result = $connection->query($sql);

if (!$result) {
    die("Erro na consulta: " . $connection->error);
}

$pessoa = $result->fetch_assoc();

$connection->close();



