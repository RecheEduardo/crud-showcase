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

$sql = "DELETE FROM pessoa WHERE id = $id";

$conn->query($sql);

header('Location: ../CostumersList/costumersList.php');

$conn->close();