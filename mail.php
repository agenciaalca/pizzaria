<?php

$msg = "";
$msgSugestao = "";

if (isset($_POST['btnSugestao'])) {
    
    echo 'entrei aqui';

    $nome = $_POST['fsNome'];
    $email = $_POST['fsEmail'];
    $telefone = $_POST['fsTelefone'];
    if (empty($telefone)){
        $telefone = "Telefone não preenchido";
    }
    $sugestao = $_POST['fsSugestao'];
    

    $formcontent = "SUGESTÃO DE SABORES - PIZZA NA PEDRA\n"
            . "\nDe: " . $nome
            . "\nEmail: " . $email
            . "\nTelefone: " . $telefone
            . "\nMensagem: " . $sugestao;

    $recipient = "cristiane@agenciaalca.com";
    $subject = "Formulário de Contato - Pizza na Pedra";
    $mailheader = "De: " . $email . "\r\n";


    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        $msgSugestao = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Sugestão enviada com sucesso!</strong> 
            </div>';
    } else {
        $msgSugestao = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar, tente novamente! </strong> 
            </div>';
    }
}

if (isset($_POST['btnContato'])) {

    //====================================================
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];
    
     if (empty($telefone)){
        $telefone = "Não preenchido";
    }
    //====================================================
    //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
    //==================================================== 
    $email_remetente = "cristiane@agenciaalca.com"; // deve ser uma conta de email do seu dominio 
    //====================================================
    //Configurações do email, ajustar conforme necessidade
    //==================================================== 
    $email_destinatario = "cristiane@agenciaalca.com"; // pode ser qualquer email que receberá as mensagens
    $email_reply = "$email";
    $email_assunto = "Formulário de Contato - Pizza na pedra"; // Este será o assunto da mensagem
    //====================================================
    //Monta o Corpo da Mensagem
    //====================================================
    $email_conteudo = "FORMULÁRIO DE CONTATO\n"
            . "\n<b>De:</b> " . $nome
            . "\n<b>Email:</b> " . $email
            . "\n<b>Telefone:</b> " . $telefone
            . "\n<b>Mensagem:</b> " . $mensagem;
    //====================================================
    //Seta os Headers (Alterar somente caso necessario) 
    //==================================================== 
    $email_headers = implode("\n", array("From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));
    //====================================================
    //Enviando o email 
    //==================================================== 
    if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)) {
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
    //====================================================

}
?>

