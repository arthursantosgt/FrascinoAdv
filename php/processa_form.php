<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = urlencode($_POST['nome'] ?? '');
    $mensagem = urlencode($_POST['mensagem'] ?? '');

    // Número do WhatsApp da empresa no formato internacional
    $numero_empresa = "5511949915638";

    // Mensagem personalizada
    $mensagem_completa = "Olá, meu nome é $nome. $mensagem";

    // Redireciona para o WhatsApp Web com a mensagem
    header("Location: https://wa.me/$numero_empresa?text=$mensagem_completa");
    exit;
}
?>
