<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edudatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['pessoa']['nome'];
$idade = $_POST['pessoa']['idade'];
$email = $_POST['pessoa']['email'];

$sql = "INSERT INTO `pessoa` (`nome`, `idade`, `email`) 
VALUES ('$nome', '$idade', '$email');";

if ($conn->query($sql) === FALSE) {
    echo "Houve um erro: " . $sql . "<br>" . $conn->error;
}

header('Location: ../CostumersList/costumersList.php');

$conn->close();