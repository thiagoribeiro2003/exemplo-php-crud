<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    try {
        // Configurações do servidor de e-mail
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'fd19a4733332bc';
        $mail->Password = '12f36e49f4953d';

        //Quem envia
        $mail->setFrom('contato@sitecrud.com', 'Site Crud');
        
        // Quem recebe
        $mail->addAddress('fulano@sitecrud.com', 'Fulano');


        // Para quem responder
        $mail->addReplyTo($email, 'Retorno do contato');

        //Content
        $mail->isHTML(true);                                  
        
        //Set email format to HTML
        $mail->Subject = "Contato Site - ".$assunto;
        
        // Corpo da mensagem em formato HTML
        $mail->Body    = "<b>Nome:</b> $nome <br> 
        <b>E-mail:</b> $email <br> <b>Assunto: $assunto</b> <br>
        <b>Mensagem:</b> $mensagem";
        
        // Corpo da mensagem em formato texto puro
        $mail->AltBody = "Nome: $nome \n E-mail: $email \n Assunto: $assunto \n Mensagem: $mensagem";

        $mail->send();
        echo 'Mensagem foi enviada com sucesso!';
    } catch (Exception $e) {
        echo "Ops! Deu ruim: {$mail->ErrorInfo}";
    }
} // final do if enviar
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contato usando phpmailer</h1>
    <hr>
    <form action="" method="post">
       <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
       </p>

       <p>
            <label for="email">E-mail:</label>
            <input type="text" name="email" id="email" required>
       </p>

       <p>
            <label for="assunto">Assunto:</label>
            <select name="assunto" id="assunto" required>
                <option value=""></option>
                <option>Dúvidas</option>
                <option>Reclamações</option>
                <option>Elogios</option>
            </select>
       </p>

       <p>
            <label for="mensagem">Mensagem:</label>
            <br>
            <textarea name="mensagem" id="mensagem" cols="30" rows="5"></textarea>
       </p>

        <button type="submit" name="enviar">Enviar</button>

        <p><a href="index.php">Voltar</a></p>
</body>
</html>