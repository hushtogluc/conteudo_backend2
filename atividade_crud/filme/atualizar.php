<?php
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   $codigo = $_POST['codigo'];
   $titulo = $_POST['titulo'];
   $sinopse = $_POST['sinopse'];
   $ano= $_POST['ano'];
   $diretor= $_POST['diretor'];


   //cria uma variável com um comando SQL
   $SQL = "UPDATE `filme` SET `titulo`= ?, `sinopse`= ?, `ano`= ?, `diretor`= ? WHERE  `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $titulo, $sinopse, $ano, $diretor, $codigo);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







