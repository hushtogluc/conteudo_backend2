<?php    
    include_once  "../template/cabecalho.php";
    include_once  "../template/menu.php";
    include_once  "../noticia/consultar_por_id.php";
 ?>


<div class="container">
    <h1><?php echo $noticia->titulo; ?></h1>
    <hr>
    <img src="../uploads/<?php echo $noticia->foto; ?>" />
    <p><?php echo $noticia->materia; ?></p>
</div>

<?php include_once "../template/rodape.php" ?>
