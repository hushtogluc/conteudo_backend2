<div class="container">
    <h1>Cadastro de filmes </h1>
    <hr>

    <form action="<?php echo isset($usuario) ? 
     "atualizar.php":
     "inserir.php"; ?>"
      method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="idusuario" value="" ;?>" ><br>

        <label>Título</label><br>
        <input type="text" name="titulo" value="" ><br>

        <label>Sinopse</label><br>
        <input type="text" name="sinopse" value="" ><br>

        <label>Ano de lançamento</label><br>
        <input type="text" name="ano" value="" ><br>

        <label>Diretor</label><br>
        <input type="text" name="diretor" value="" ><br> 

        <br>
        <button type="submit">Inserir</button>
        
    </form>