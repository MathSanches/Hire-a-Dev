<?php
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT nome, email, desenvolvedor FROM programadores";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nome']}</td>
                <td>{$row['email']}</td>
                <td>{$row['desenvolvedor']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>Nenhum dado encontrado</td></tr>";
}

$conn->close();
?>
