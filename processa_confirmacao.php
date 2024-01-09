<?php
// Configurações do banco de dados
$servername = "lucsidsistemasdns.ddns.net";
$username = "root";
$password = "CDLsistemas2017";
$dbname = "presencaaviva";

// Cria uma conexão com o MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];

// Prepara a instrução SQL para inserir os dados na tabela
$sql = "INSERT INTO confirmacoes_presenca (nome) VALUES ('$nome')";

// Executa a instrução SQL
if ($conn->query($sql) === TRUE) {
    echo "Obrigado por confirmar sua presença!";
} else {
    echo "Erro ao processar a confirmação: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>
