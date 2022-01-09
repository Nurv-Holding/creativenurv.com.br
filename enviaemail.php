<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

//1 – Definimos Para quem vai ser enviado o email
        $para = "atendimento@creativenurv.com";
//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
        $nome = $_POST['nome'];
        $empresa = $_POST['empresa'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $setor = $_POST['setor'];
        $assunto = "Contato via Website";
        $textarea = $_POST['textarea'];
        $mensagem = "NOME:\n".$nome."<br />\nEMPRESA:\n".$empresa."<br />\nTELEFONE:\n".$tel."<br />\nEMAIL:\n".$email."<br />\nSETOR:\n".$setor."<br />\nMENSAGEM:\n".$textarea;
//5 – agora inserimos as codificações corretas e  tudo mais.
        $headers =  "Content-Type:text/html; charset=UTF-8\n";
        $headers .= "From:  $email\n";
//Vai ser //mostrado que  o email partiu deste email e seguido do nome
        $headers .= "X-Sender:  <$email>\n";
//email do servidor //que enviou
        $headers .= "X-Mailer: PHP  v".phpversion()."\n";
        $headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
        $headers .= "Return-Path:  <$email>\n";
//caso a msg //seja respondida vai para  este email.
        $headers .= "MIME-Version: 1.0\n";

        mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.

echo"<script language='javascript' type='text/javascript'> alert('Mensagem enviada');window.location.href=' index.php';</script>";


?>
