<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Definir o e-mail do destinatário
    $to = "leander.borges@pdbomdespacho.com.br";
    // Assunto do e-mail
    $subject = "Formulário de Cadastro de Aluno";

    // Coletar e sanitizar dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $faculdade = htmlspecialchars($_POST['faculdade']);
    $curso = htmlspecialchars($_POST['curso']);
    $anos = htmlspecialchars($_POST['anos']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $email = htmlspecialchars($_POST['email']);

    // Criar a mensagem do e-mail
    $message = "Nome: $nome\n";
    $message .= "Faculdade: $faculdade\n";
    $message .= "Curso: $curso\n";
    $message .= "Anos no Exterior: $anos\n";
    $message .= "Telefone: $telefone\n";
    $message .= "E-mail: $email\n";

    // Definir o cabeçalho do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Seu formulário foi enviado com sucesso!";
    } else {
        echo "Houve um erro ao enviar seu formulário. Tente novamente mais tarde.";
    }
} else {
    echo "Método de requisição não permitido.";
}
?>
