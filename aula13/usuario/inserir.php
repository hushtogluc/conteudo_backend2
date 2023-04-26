<?php
   
   //importa o arquivo de conexão
   require_once "../conexao.php";

   //pegar os valores enviados do formulário
   $nome = $_POST["nome"];
   $login = $_POST["login"];
   $senha = $_POST["senha"];

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('$nome', '$login', '$senha');";

   echo $SQL;
   
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

?>   







