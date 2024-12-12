<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode enviar os dados por e-mail, armazenar em um banco de dados, etc.
    // Exemplo de envio por e-mail
    $para = "renatomartins.23@outlook.com";
    $assunto = "Mensagem do formulário de contato";
    $corpo = "Nome: $nome\nEmail: $email\nCelular: $celular\nMensagem: $mensagem";
    $cabecalhos = "From: $email";

    if (mail($para, $assunto, $corpo, $cabecalhos)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
