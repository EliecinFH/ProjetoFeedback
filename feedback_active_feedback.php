<?php

// Tentar abrir o arquivo
$file = fopen('/tmp/ChampionshipsProject/feedback_active_feedback.php', 'w');

// Verificar se o arquivo foi aberto com sucesso
if ($file) {
    fwrite($file,"C:\xampp\htdocs\ProjetoFeedback\process_feedback.php");
    fclose($file);
} else {
    echo "Erro ao abrir o arquivo.";
}
?>