<?php 
require_once "usuario/consultar_por_id.php";
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
    <h1>Cadastro de usuário</h1>
    <hr>

    <form action="usuario/inserir.php" method="post">
        
        <label>Nome</label><br>
        <input type="text" name="nome" value="<?php echo $usuario->nome ?? "" ;?>" ><br>

        <label>Login</label><br>
        <input type="text" name="login" value="<?php echo $usuario->login ?? "" ;?>" ><br>

        <label>Senha</label><br>
        <input type="password" name="senha"><br>
        <br>
        <button type="submit">Inserir</button>
        
    </form>


    
</body>
</html>