<h2>Estrutura de repetição While</h2>
<hr>
<p>
    Utilizada para repetir um conjunto de instruções.
</p>
<strong>Exemplo</strong>
<pre>
    while(condição){
        //comandos a serem repetidos.
    }
</pre>

<?php
    $contador = 0;
    while($contador = 10){
        echo "Olá pessoal $contador<br>";
        $contador++;
    }
?>