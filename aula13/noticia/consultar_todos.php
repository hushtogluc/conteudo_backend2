<?php
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM noticia0 where categoria like ?";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega valor assunto enviado via GET pela URL ou um valor em branco
   $assunto = "%".$_GET['assunto'] ."%" ?? "%%";

   //vincula a variável assunto com o param ? no SQL
   $comando->bind_param("s", $assunto);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result(); 

   //pega todas as linhas do resultado da consulta
   $noticias = [];
   while ($noticia = $resultados->fetch_object()){
      $noticias[] = $noticia; 
   }
   ?>