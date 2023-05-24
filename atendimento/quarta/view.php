<?php

echo "Nome" ."<br>" . $_POST['nome'] . "<br>";
echo "Altura" ."<br>" . $_POST['altura']  . "<br>";
echo "Peso" ."<br>" . $_POST['peso']  . "<br>";

$foto = $_FILES['foto'] ;
move_uploaded_file($foto['tmp_name'], $foto['name']);
$nome_foto = $foto['name'];

echo "<img src='$nome_foto' height='100xp'>";

