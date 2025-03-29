<?php
    $resp_name = addslashes($_POST['resp_name']);
    $child_name = addslashes($_POST['child_name']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);

    $destino = "psidannilocarlos@gmail.com";
    $assunto = "Contato do responsável: ".$resp_name;

    $body = "Nome do responsável:".$resp_name."\n"
        ."Nome da criança: ".$child_name."\n"
        ."Telefone: ".$phone."\n"
        ."Mensagem: ".$message;

        $head = "From: psidannilocarlos@gmail.com"."\n"."Reply-To: ".$email."\n"."X=Mailer: PHP/". phpversion();

        if(mail($destino, $assunto, $body, $head)){
            echo ("Email enviado com sucesso!");
        }else{
            echo ("Houve um erro ao enviar o email! Tente novamente mais tarde.");
        }
?>