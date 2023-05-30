<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //verifica se foi enviada o param id pela URL
   if(isset($_GET['id'])){

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `noticia` WHERE  `idnoticia`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result();

   //pegar a primeira linha de resultado da consulta
   $noticia = $resultados->fetch_object();

  
   
   }







