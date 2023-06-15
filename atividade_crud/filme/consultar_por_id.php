<?php
   
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   //verifica se foi enviada o param codigo pela URL
   if(isset($_GET['codigo'])){

   $codigo = $_GET['codigo'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `filme` WHERE `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $codigo);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result();

   //pegar a primeira linha de resultado da consulta
   $filme = $resultados->fetch_object();

  
   
   }







