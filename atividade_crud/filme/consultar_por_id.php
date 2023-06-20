<?php
   
   require_once "../dados/conexao.php";

   if(isset($_GET['codigo'])){

   $codigo = $_GET['codigo'];

   $SQL = "SELECT * FROM `filme` WHERE `codigo`= ? ;";
 
   $comando = $conexao->prepare($SQL);

   $comando->bind_param("i", $codigo);

   $comando->execute();

   $resultados = $comando->get_result();

   $filme = $resultados->fetch_object();

  
   
   }







