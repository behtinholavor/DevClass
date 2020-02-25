<?php

// function send($data) {
//     $to = '';
//     $subject = $data->subject;
//     $message = $data->message;
//     $headers = "From: {$data->email}"."\r\n".
//     'Replay-To: contato@devclass.com.br'."\r\n".
//     'X-Mailer: PHP/'.phpversion();    
//     return mail($to, $subject, $message, $headers);
// }

function send(array $data) {
    $email = new PHPMailer\PHPMailer\PHPMailer;
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'PLAIN'; //SSL
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = '465';
    $email->SMTPAuth = true;
    $email->Username = '41878fece02248';
    $email->Password = '13cef2706be88b';
    $email->isHTML(true);
    $email->setFrom('robertinhou@live.com');
    $email->FromName = $data['quem'];
    $email->addAddress($data['para']);
    $email->Body = $data['mensagem'];
    $email->Subject = $data['assunto'];
    $email->AltBody = 'Para ver esse email tenha certeza de esta vendo em um programa que aceita ver HTML';
    $email->MsgHTML($data['mensagem']);    
    return  $email->send();
    #echo $email->ErrorInfo;
}

