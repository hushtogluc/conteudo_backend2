<h2>Operadores lógicos</h2>

<ol>
    <li>and - E</li>
    <li>or - OU</li>
    <li>xor - Ou exclusivo</li>
    <li>! - Não </li>
    <li>&& - E</li>
    <li>|| - OU</li>
</ol>

<?php
    $media = 6;
    $faltas = 20;
    $criterio1 = $media > 6; //False
    $criterio2 = $faltas < 25;//True
    $resultado = $criterio1 && $criterio2;//False
    var_dump($resultado);
?>