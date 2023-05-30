<?php
  include_once "../noticia/consultar_todos.php";
  include_once "../template/cabecalho.php";
  include_once "../template/menu.php";
?>

  <!--Notícias--> 
<div class="container">

<div class="row row-cols-1 row-cols-md-2 g-4">

  <?php foreach($noticias as $id => $noticia):?>
    <div class="col">
    <div class="card">
      <img src="../uploads/<?php echo $noticia->foto; ?>" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title"><?php echo $noticia->titulo; ?></h5>
        <a href="ler.php?id=<?php echo $noticia->idnoticia; ?>" class="btn btn-primary">Ler mais</a>

      </div>  
    </div>
  </div>
 <?php endforeach; ?>
</div>

  <!--Fim Notícias -->
<?php  include_once "../template/rodape.php"; ?>

        