<?php 
require_once "consultar_por_id.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1>Cadastro de notícias</h1>
    <hr>

    <form action="<?php echo isset($noticia)?"atualizar.php":"inserir.php";?>" method="post" enctype="multipart/form-data">

    <input type="hidden" name="idnoticia" value="<?php echo $noticia->idnoticia ?? "" ;?>" ><br>    

        <label>Título</label><br>
        <input type="text" name="titulo" value="<?php echo $noticia->titulo ?? "" ;?>" ><br>

        <label>Materia</label><br>
        <input type="text" name="materia" value="<?php echo $noticia->materia?? "" ;?>" ><br>

        <label>Categoria</label><br>
        <input type="text" name="categoria" value="<?php echo $noticia->categoria?? "" ;?>"><br>
        
        <label>Foto</label><br>
        <input type="file" name="foto"><br>

        <button type="submit">Inserir</button>
        
    </form>


    
</body>
</html>