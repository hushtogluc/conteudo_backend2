<?php
   
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário de cadastro
   if(isset($_POST['titulo']) ){

   //faz o upload do diretor do usuário


   $titulo = $_POST['titulo'];
   $sinopse = $_POST['sinopse'];
   $ano = $_POST['ano'];
   $diretor = $_POST['diretor'];

   //cria uma variável com um comando SQL
   echo $SQL = "INSERT INTO `filme` ( `titulo`, `sinopse`, `ano`, `diretor`) VALUES ( ?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $titulo, $sinopse, $ano, $diretor);

   //executa o comando
   $comando->execute();

   }

   //volta para o formulário
   header("Location: index.php");

   






