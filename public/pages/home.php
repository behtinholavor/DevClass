<?=get('message');?>

<div class="container">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="?page=usuario">Usuário</a>
    <a class="navbar-brand" href="?page=contato">Contato</a>
  </nav>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>E-mail</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      
      <?php
        $users = all('users');
        foreach($users as $user):      
      ?>
        <tr>
          <td><?=$user->id?></td>
          <td><?=$user->name?></td>
          <td><?=$user->surname?></td>
          <td><?=$user->email?></td>
          <td><a class="btn btn-success" href="/?page=usuario&id=<?=$user->id;?>">Editar</a></td>
          <td><a class="btn btn-danger"  href="/?page=delete&id=<?=$user->id;?>">Deletar</a></td>
        </tr>
        <?php endforeach; ?>
      
    </tbody>
  </table>
  

</div>