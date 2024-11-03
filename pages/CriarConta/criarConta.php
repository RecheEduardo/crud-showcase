<?php 

include '../Login/conexaoDB.php';

$nome = $_POST['admins']['nome'];
$email = $_POST['admins']['email'];
$senha = $_POST['admins']['senha'];

$checar_email_code = "SELECT * FROM `admins` WHERE `email` = '$email';";
$checar_email_query = $connection->query($checar_email_code);

if($checar_email_query->num_rows != 0){
    echo '<script>alert("E-mail já cadastrado no sistema, utilize outro!")</script>';
}
else{
    $sql_code = "INSERT INTO `admins` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha');";

    if($connection->query($sql_code) === true){
        header('Location: ../../');
    }else{
        echo 'Erro ao cadastrar o usuário:' . $connection->error; 
    }
}