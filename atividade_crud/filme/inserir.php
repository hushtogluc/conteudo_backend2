<?php
   
   //importa o arquivo de conexão
   require_once "../dados/conexao.php";

   if(isset($_POST['titulo']) && isset($_POST['sinopse']) && isset($_POST['ano']) && isset($_POST['diretor'])){

      //faz upload da foto do usuário
      require_once "faz_upload.php";

   $nome = $_POST['nome'];
   $login = $_POST['login'];
   $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

   //cria uma variavel com um comando SQL
   $SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`, foto) VALUES (?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssss", $nome, $login, $senha, $nome_foto);

   //executa o comando
   $comando->execute();

}