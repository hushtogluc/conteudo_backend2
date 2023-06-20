<?php
   require_once "../dados/conexao.php";

   $codigo = $_POST['codigo'];
   $titulo = $_POST['titulo'];
   $sinopse = $_POST['sinopse'];
   $ano= $_POST['ano'];
   $diretor= $_POST['diretor'];

   $SQL = "UPDATE `filme` SET `titulo`= ?, `sinopse`= ?, `ano`= ?, `diretor`= ? WHERE `codigo`= ? ;";

   $comando = $conexao->prepare($SQL);

   $comando->bind_param("ssssi", $titulo, $sinopse, $ano, $diretor, $codigo);

   $comando->execute();

   header("Location: index.php");

   







