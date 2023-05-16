<?php
   //importa o arquivo de conexao
   require_once "conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM usuario";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result(); 

   //pega todas as linhas do resultado da consulta
   $usuarios = [];
   while ($usuario = $resultados->fetch_object()){
      $usuarios[] = $usuario; 
   }
   ?>