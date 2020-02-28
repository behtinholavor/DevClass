<?=get('message');?>

<form action="/pages/forms/usuario.php" method="POST" role="form">
    <legend>Usuário</legend>

    <div class="form-group">
        <label for="">Nome</label>
        <input name="name" type="text" class="form-control" placeholder="Digite o nome">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input name="surname" type="text" class="form-control" placeholder="Digite o sobrenome">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input name="email" type="text" class="form-control" placeholder="Informe o email">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input name="password" type="password" class="form-control" placeholder="Escolha uma senha">
    </div>

    <div class="btn-group" role="group" aria-label="">
        <button formaction="/pages/forms/back.php" type="hidden" class="btn btn-danger">Voltar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>    
    </div>
</form>
