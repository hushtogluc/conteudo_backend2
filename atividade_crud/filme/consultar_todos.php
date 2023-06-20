<?php

   require_once "../dados/conexao.php";

   $SQL = "SELECT * FROM filme";
 
   $comando = $conexao->prepare($SQL);

   $comando->execute();

   $resultados = $comando->get_result();

   $filmes = [];
   while ($filme = $resultados->fetch_object()){
      $filmes[] = $filme;
   }

   






   






