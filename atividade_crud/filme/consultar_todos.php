<?php
   
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM filme";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultados
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $filmes = [];
   while ($filme = $resultados->fetch_object()){
      $filmes[] = $filme;
   }

   






   






