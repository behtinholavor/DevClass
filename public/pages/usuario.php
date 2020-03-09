<?=get('message');?>

<?php 
    $id = loadId(); 
    $user = find("users", "id", $id);
?>

<form action="/pages/forms/usuario.php" method="POST" role="form">
    <legend>Usuário</legend>

    <div class="form-group">
        <label for="">Id</label>
        <input name="id" type="text" readonly="true" class="form-control" placeholder="Id" 
            value="<?PHP echo isset($user->id) ? $user->id : "0"; ?>">
    </div>

    <div class="form-group">
        <label for="">Nome</label>
        <input name="name" type="text" class="form-control" placeholder="Digite o nome" 
            value="<?PHP echo isset($user->name) ? $user->name : ""; ?>">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input name="surname" type="text" class="form-control" placeholder="Digite o sobrenome"         
            value="<?PHP echo isset($user->surname) ? $user->surname : ""; ?>">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input name="email" type="text" class="form-control" placeholder="Informe o email"
            value="<?PHP echo isset($user->email) ? $user->email : ""; ?>">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input name="password" type="password" class="form-control" placeholder="Escolha uma senha"
            value="<?PHP echo isset($user->password) ? $user->password : ""; ?>">
    </div>

    <div class="btn-group" role="group" aria-label="">
        <button formaction="/pages/forms/back.php" type="hidden" class="btn btn-danger">Voltar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>    
    </div>
</form>
