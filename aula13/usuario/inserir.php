<?php
 
 //importa o arquivo de conexão
 require_once "../conexao.php";

 //cria uma variável com comando SQL
$SQL = "INSERT INTO `usuario` (`idusuario`, `nome`, `login`, `senha`) VALUES ('', 'Camila Facanali', 'admin123', '123');";

//prepara o comando para ser executado no mysql
$comando = $conexao->prepare($SQL);

//executa o comando 
$comando->execute();




