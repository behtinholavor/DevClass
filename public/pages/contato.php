<h2>Contato</h2>

<form action="/pages/forms/contato.php" method="GET" role="form">
    <!-- <legend>Formulário de Contato</legend> -->

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Informe seu email">
    </div>

    <div class="form-group">
        <label for="">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Assunto">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea cols="30" rows="10" class="form-control" name="message" placeholder="Mensagem"></textarea>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
