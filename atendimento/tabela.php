<?php include "dados.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    unset($alunos[$id]);
}

if(isset($_POST['Nome'])){
$alunos [] = [
    "RA" => $_POST['RA'],
    "Nome" => $_POST['Nome'],
    "Turma" => $_POST['Turma']
];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabelinha ♡ </title>
</head>
<body>
        
 <table border="1" width="100%">
    <tr>
        <th>RA</th>
        <th>Nome</th>
        <th>Turma</th>
        <th>Ações</th>
    </tr>

    <?php foreach($alunos as $key => $aluno) { ?>
    <tr>
        <td> <?php echo $aluno["RA"] ?> </td>
        <td> <?php echo $aluno["Nome"] ?> </td>
        <td> <?php echo $aluno["Turma"] ?> </td>
        <td> <a href="tabela.php?id=<?php echo $key; ?>"</a> Excluir </td>
    </tr>
        <?php } ?>
 </table>


</body>
</html>