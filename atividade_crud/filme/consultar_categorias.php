<?php

   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT DISTINCT 'ano' FROM filme";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result(); 

   //pega todas as linhas do resultado da consulta
   $anos = [];
   while ($ano = $resultados->fetch_object()){
      $anos[] = $ano; 
   }
   ?>