<?php
// Verifica se a solicitação é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o evento do corpo da requisição
    $evento = $_POST["evento"];

    // Define o caminho do arquivo de log no servidor
    $caminhoArquivoLog = "C:\Projetos\SiteVendas\log.txt";

    // Adiciona a informação ao arquivo de log
    file_put_contents($caminhoArquivoLog, "Evento de clique: $evento\n", FILE_APPEND);

    // Pode adicionar mais lógica aqui, se necessário
    // ...

    // Responde ao cliente
    echo json_encode(["mensagem" => "Clique registrado com sucesso!"]);
} else {
    // Se não for uma solicitação POST, retorna erro
    http_response_code(405); // Método não permitido
    echo "Método não permitido";
}
?>
