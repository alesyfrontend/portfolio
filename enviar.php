<?php
$nome = addslashes($_POST["nome"]);
$email = addslashes($_POST ["email"]);
$telefone = addslashes($_POST ["telefone"]);

$para = "alesy2007@gmail.com";
$assunto = "Coleta de dados - Portfólio";


$corpo = "Nome:" .$nome. "\n". "E-mail:  ".$email. "\n". "Telefone: ".$telefone;


$cabeça: "From: alesy2007@gmail.com" ."\n". "Replay-to:" .$email. "\n". "X-Mailer: PHP/" .phpversion();

if  (mail ($para,$assunto,$corpo,$cabeça )){

    echo ("E-mail enviado com sucesso!");
} else{
    echo ("Houve um erro ao enviar o email!");
}



?>  