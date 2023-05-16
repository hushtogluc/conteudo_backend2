<?php
   
   //importa o arquivo de conexão
   require_once "../conexao.php";

   $id = $_POST['idusuario'];
   $nome = $_POST['nome'];
   $login = $_POST['login'];
   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `usuario` SET `nome`= ?, `login`= ?, `senha`= ? WHERE  `idusuario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssi", $nome, $login, $senha, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: ../form_usuario.php");

   







