<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM pessoa where id = $id";

$result = $conn->query($sql);

if (!$result) {
    die("Erro na consulta: " . $conn->error);
}

$pessoa = $result->fetch_assoc();

$conn->close();



