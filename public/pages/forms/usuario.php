<?php

require "../../../bootstrap.php";

if(isEmpty()) {   
    flash('message', 'Preencha todos os campos!');
    redirect("usuario");
} else {
    $validate = validate([
        'name' => 's',
        'surname' => 's',
        'email' => 'e',
        'password' => 's'
    ]);
    
    $cadastrado = create('users', $validate);
    if($cadastrado) {
        flash('message', 'Usuário cadastrado com sucesso!', 'success');
        return redirectToHome();        
    } else {
        flash('message', 'Erro ao cadastrar usuário!');
        return redirect("usuario");
    }
    
}

