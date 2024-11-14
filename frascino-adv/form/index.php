<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    if ($email) {
        $mail = new PHPMailer(true);

        try {
            // Configuração do servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'sigaseusdireitos@gmail.com'; // Seu e-mail Gmail
            $mail->Password = 'crij eino xalq qxvg'; // Senha do App (não a senha do Gmail)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Remetente e destinatário
            $mail->setFrom($email, 'Frascino Advogados');
            $mail->addAddress('sigaseusdireitos@gmail.com'); 

            // Conteúdo do e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Nova mensagem do formulário de contato';
            $mail->Body = "
                <h3>Detalhes da Mensagem</h3>
                <p><strong>Nome:</strong> {$nome}</p>
                <p><strong>E-mail:</strong> {$email}</p>
                <p><strong>Mensagem:</strong> {$mensagem}</p>
            ";

            $mail->send();
            echo 'Mensagem enviada com sucesso!';
        } catch (Exception $e) {
            echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
        }
    } else {
        echo 'E-mail inválido. Verifique e tente novamente.';
    }
} else {
    echo 'Método inválido!';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="back">
        <form id="myForm" action="" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>
            
            <label for="email">E-mail:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="mensagem">Mensagem:</label><br>
            <textarea cols="30" rows="8" id="mensagem" name="mensagem" required></textarea><br><br>
            
            <input type="submit" value="Enviar" id="meuInput">
            <input type="hidden" name="_subject" value="Nova mensagem enviada do site!">
            <input type="text" name="_honey" style="display:none;">
            <input type="hidden" name="_captcha" value="false">
        </form>
    </div>
</body>
</html>
