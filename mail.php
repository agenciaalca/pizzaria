<?php

$msg = "";
if (isset($_POST['submit']) && $_POST['submit'] == 'ENVIAR') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $formcontent = "FORMULÁRIO DE CONTATO- Arroyo Pets\n"
            . "\nDe: " . $nome
            . "\nEmail: " . $email
            . "\nTelefone: " . $telefone
            . "\nMensagem: " . $mensagem;

    $recipient = "contato@arroyopets.com.br";
    $subject = "Formulário de Contato - Arroyo Pets";
    $mailheader = "De: " . $email . "\r\n";

    $msg = "";

    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar a mensagem, tente novamente! </strong> 
            </div>';
    }
}
?>

