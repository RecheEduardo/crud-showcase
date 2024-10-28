<?php

include '../Login/db_conection.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pessoa where id = $id";

$result = $connection->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

$pessoa = $result->fetch_assoc();

$connection->close();



