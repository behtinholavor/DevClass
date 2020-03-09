<?php

require "../../../bootstrap.php";

if(isEmpty()) {   
    flash('message', 'Preencha todos os campos!');
    redirect("usuario");
} else {
    $validate = validate([
        'id' => 'i',
        'name' => 's',
        'surname' => 's',
        'email' => 'e',
        'password' => 's'
    ]);
    
    //dd($validate);
    $id    = $validate->id;    
    $edit  = validId($id); 
      
    if($edit == true) {        
        $update = update('users', $validate, ['id', $id]);        
    } else {        
        $insert = create('users', $validate);        
    }   
    
    $state = ($edit == true) ? 2 : 1;
    //dd($state);

    if(($state > 0 && $state == 1) && ($insert <> null && $insert == true)) {
        flash('message', "Usuário cadastrado com sucesso!", 'success');
        return redirectToHome();
    } else if(($state > 0 && $state == 2) && ($update <> null && $update == true)) {
        flash('message', "Usuário atualizado com sucesso!", 'info');                            
        return redirect("usuario&id=".$id);
    } else {
        flash('message', "Erro na operação de usuários!");        
        //return redirect("usuario");        
        return redirect("usuario&id=".$id);
    }   

}

