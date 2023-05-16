<?php
   
   //importa o arquivo de conexão
   require_once "../conexao.php";

   if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha'])){

   $nome = $_POST['nome'];
   $login = $_POST['login'];
   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

   //cria uma variavel com um comando SQL
   $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES (?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sss", $nome, $login, $senha);

   //executa o comando
   $comando->execute();

}
   //volta para o formulario
   header("Location: ../usuarios.php");

   







