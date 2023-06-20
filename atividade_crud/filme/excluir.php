<?php

   require_once "../dados/conexao.php";

   $codigo = $_GET['codigo'];

   $SQL = "DELETE FROM `filme` WHERE  `codigo`= ? ;";

   $comando = $conexao->prepare($SQL);

   $comando->bind_param("i", $codigo);

   $comando->execute();

  
   header("Location: index.php");

   






