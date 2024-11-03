<?php 

include '../Login/conexaoDB.php';

$nome = $_POST['usuarios']['nome'];
$email = $_POST['usuarios']['email'];
$senha = $_POST['usuarios']['senha'];

$checar_email_code = "SELECT * FROM `usuarios` WHERE `email` = '$email';";
$checar_email_query = $connection->query($checar_email_code);

if($checar_email_query->num_rows != 0){
    echo '<script>alert("E-mail já cadastrado no sistema, utilize outro!")</script>';
}
else{
    $sql_code = "INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha');";

    if($connection->query($sql_code) === true){
        header('Location: ../../');
    }else{
        echo 'Erro ao cadastrar o usuário:' . $connection->error; 
    }
}