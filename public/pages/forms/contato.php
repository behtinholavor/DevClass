<?php

require "../../../bootstrap.php";

if(isEmpty()) {   
    flash('message', 'Preencha todos os campos!');
    redirect("contato");
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's'
]);

$data = [
    'quem' => $validate->email,
    'para' => 'robertinhou@live.com',
    'mensagem' => $validate->message,
    'assunto' => $validate->subject
];

//dd(send($data));

if(send($data)) {
    flash('message', 'Email enviado com sucesso!', 'success');
    redirect("contato");
}

