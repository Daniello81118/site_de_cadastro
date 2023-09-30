<?php

$servername = "localhost";
$username = "usuario";
$password = "senha";
$dbname = "BD";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo "Novo usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o usuário: " . $conn->error;
    }
}

$conn->close();
?>
