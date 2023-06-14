<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se o nome, login e senha foram enviado
   //do formulário de cadastro
   if(isset($_POST['codigo']) && isset($_POST['titulo']) &&
      isset($_POST['sinopse'])){

   //faz o upload do diretor do usuário
   require_once "faz_upload.php";

   $codigo= $_POST['codigo'];
   $titulo = $_POST['titulo'];
   $sinopse = $_POST['sinopse'];
   $sinopse = $_POST['ano'];
   $diretor = $_POST['diretor'];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `filme` (`codigo`, `titulo`, `sinopse`, `ano`, `diretor`) VALUES (?, ?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssss", $codigo, $titulo, $sinopse, $ano, $diretor);

   //executa o comando
   $comando->execute();

   }

   //volta para o formulário
   header("Location: index.php");

   






