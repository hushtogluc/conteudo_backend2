<?php 
    include_once "dados.php";
    include_once "header.php";
    include_once "menu.php";
?>


<!-- Noticias -->
<div class="container">
  
  <div class="row row-cols-1 row-cols-md-3 g-3">
    <?php foreach($noticias as $id => $noticia): ?>
          <div class="col">
            <div class="card">
                <img src="<?php echo $noticia['foto']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $noticia['titulo']; ?></h5>
                    <p class="card-text"><?php echo $noticia['chamada']; ?></p>
                    <a href="ler.php?id=<?php echo $id; ?>" class="btn btn-primary">Ler mais</a>
                </div>
            </div>
          </div>
      <?php endforeach; ?>
  </div>

</div>

<!-- Fim Noticias -->
<?php include_once "rodape.php" ?>