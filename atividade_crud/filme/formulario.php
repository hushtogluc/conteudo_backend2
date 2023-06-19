    <?php
   require_once "consultar_por_id.php";
   require_once "../template/cabecalho.php";
?>

<div class="container">
    <h1>Cadastro de filmes </h1>
    <hr>

    <form action="<?php echo isset($filme) ? 
     "atualizar.php":
     "inserir.php"; ?>"
      method="post" enctype="multipart/form-data">
        
      <input type="hidden" name="codigo" value="<?php echo isset($filme) ? $filme->codigo : '' ?>" ><br>

        <label>Título</label><br>
        <input type="text" name="titulo" value="<?php echo isset($filme) ? $filme->titulo : '' ;?>" > <br>

        <label>Sinopse</label><br>
        <input type="text" name="sinopse" value="<?php echo isset($filme) ? $filme->sinopse : '' ?>" > <br>

        <label>Ano de lançamento</label><br>
        <input type="text" name="ano" value="<?php echo isset($filme) ? $filme->ano : '' ?>" > <br>

        <label>Diretor</label><br>
        <input type="text" name="diretor" value="<?php echo isset($filme) ? $filme->diretor : '' ?>" > <br> 

        <br>
        <button type="submit">Inserir</button>
        
    </form>

