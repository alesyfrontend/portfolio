<?php
    $nome = addslashes($_POST['nome']);
    $nome = addslashes($_POST['email']);
    $nome = addslashes($_POST['telefone']);


    $para ="alesy2007@gmail.com" ;
    $assunto = "coleta de dados - Portfólio";


    $corpo="Nome: ".$nome. "\n"."E-mail: " .$email."\n" ."Telefone: " .$telefone;

    $cabeca= "from: alesy@gmail.com" ."\n" ."Replay-to: ".$email. "\n" . "X-Mailer:PHP/" .phpversion();
    
    if (mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    } 
        else{
        echo("Houve um erro ao enviar o email");
    }
?>

