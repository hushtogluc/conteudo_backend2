<?php

   require_once "../dados/conexao.php";

   if(isset($_POST['titulo'])  && isset ($_POST['sinopse'])  && isset ($_POST['ano'])  && isset ($_POST['diretor']) ){

   $titulo = $_POST['titulo'];
   $sinopse = $_POST['sinopse'];
   $ano = $_POST['ano'];
   $diretor = $_POST['diretor'];

    $SQL = "INSERT INTO `filme` ( `titulo`, `sinopse`, `ano`, `diretor`) VALUES ( ?, ?, ?, ?);";

   $comando = $conexao->prepare($SQL);

   $comando->bind_param("ssss", $titulo, $sinopse, $ano, $diretor);

   $comando->execute();

   }

   header("Location: index.php");

   






