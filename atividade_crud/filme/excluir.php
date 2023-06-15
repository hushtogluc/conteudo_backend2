<?php
   
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   $codigo = $_GET['codigo'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `filme` WHERE  `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $codigo);

   //executa o comando
   $comando->execute();

   //volta para a listagem de usuários
   header("Location: index.php");

   






