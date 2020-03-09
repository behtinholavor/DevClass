<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$deletado = delete('users', 'id', $id);

if($deletado){
    flash('message', 'Usuário deletado com sucesso!', 'success');        
    return redirectToHome(); 
}

flash('message', "Erro na operação de deletar!");        
redirect("usuario&id=".$id);
