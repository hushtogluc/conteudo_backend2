<?php 
  require_once "../login/controlar_acesso.php"; 
  require "consultar_todos.php";
  require_once "../template/cabecalho.php";
  require_once "../template/menu_restrito.php";
?>

<div class="container">

    <h1>Filmes</h1>
    <hr>

    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">Inserir Novo</a>
    </div>

    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Ano</th>
      <th scope="col">Diretor</th>
      <th scope="col">Ações</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($filmes as $filme): ?>
    <tr>
      <td><?= $filme->titulo ?></td>
      <td><?= $filme->sinopse ?></td>
      <td><img src="../uploads/<?= $filme->foto ?>" height="45px"></td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $filme->codigo ?>" class="btn btn-danger">
        <i class="fa-solid fa-trash"></i> 
        Excluir
      </a>

      <a href="formulario.php?id=<?= $filme->codigo ?>" class="btn btn-primary">
      <i class="fa-solid fa-pen-to-square"></i>
        Atualizar
      </a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
    </table>

</div>

<?php require_once "../template/rodape.php" ?>