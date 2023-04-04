<?php
  include_once "dados.php";
  include_once "header.php";
  include_once "menu.php";
?>

  <!--Notícias--> 
<div class="container">

<div class="row row-cols-1 row-cols-md-2 g-4">

  <?php foreach($noticias as $noticia):?>
    <div class="col">
    <div class="card">
      <img src="<?php echo $noticia ['foto']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
       <h5 class="card-title"><?php echo $noticia ['titulo']; ?></h5>
        <p class="card-text">"<?php echo $noticia ['chamada']; ?>"</p>
        <a href="#" class="btn btn-primary">Ler mais</a>
      </div>
    </div>
  </div>
 <?php endforeach; ?>
</div>

  <!--Fim Notícias -->
<?php  include_once "rodape.php"; ?>