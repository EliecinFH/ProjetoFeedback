<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "feedback_db";


// Criar conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT name, email, feedback, submitted_at FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback dos Colaboradores</title>
    <link rel="stylesheet" href="static/styles.css">
</head>
<body>
    <h1>Feedback dos Colaboradores</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Feedback</th>
            <th>Data</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]. "</td><td>" . $row["feedback"]. "</td><td>" . $row["submitted_at"]. "</td><tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum feedback encontrado</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>