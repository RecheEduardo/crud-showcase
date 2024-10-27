<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$nome = $_POST['pessoa']['nome'];
$idade = $_POST['pessoa']['idade'];
$email = $_POST['pessoa']['email'];

$sql = "UPDATE `pessoa` SET `nome` = '$nome', `idade` = '$idade', `email` = '$email' WHERE `pessoa`.`id` = $id;";

$conn->query($sql);

$conn->close();
header('Location: ../UserList/usersList.php');
