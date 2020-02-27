<?php

require "../../../bootstrap.php";

if(isEmpty()) {   
    flash('message', 'Preencha todos os campos!');
    redirect("contato");
}

$validate = validate([
    'name' => 's',
    'surname' => 's',
    'email' => 'e',
    'password' => 's'
]);

$cadastrado = create('user', $validate);

// if($cadastrado) {
//     flash('message', 'Usuário cadastrado com sucesso!', 'success');
//     return redirect("usuario");
// }

// flash('message', 'Erro ao cadastrar usuário!');
// return redirect("usuario");