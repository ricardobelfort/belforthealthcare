<?php
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/Exception.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

$nome = $_POST['remetenteNome'];
$email = $_POST['remetenteEmail'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.belforthealthcare.com.br';        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contato@belforthealthcare.com.br'; // SMTP username
    $mail->Password = 'Belf@rt2019';                      // SMTP password
    // $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Recipients
    $mail->setFrom('contato@belforthealthcare.com.br', 'Contato Site');
    $mail->addAddress('contato@belforthealthcare.com.br', 'Contato Site');     // Add a recipient
    $mail->addReplyTo($email, $nome);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $assunto;
    $mail->Body    = $mensagem;
    
    $mail->send();
        echo 'Mensagem enviada com sucesso!';
    } catch (Exception $e) {
        echo 'Mensagem não enviada! Erro ao enviar. ', $mail->ErrorInfo;
    }
?>