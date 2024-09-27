<?php
$servername = "localhost:33096";
$username = "root";
$password = ""; 
$dbname = "programadores_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $desenvolvedor = $_POST['dev'];

    $sql = "INSERT INTO programadores (nome, email, desenvolvedor) VALUES ('$nome', '$email', '$desenvolvedor')";
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

