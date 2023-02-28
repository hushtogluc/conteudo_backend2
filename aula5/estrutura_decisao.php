<h2>Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar
    blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
            if(condicao){
                //intruções executadas
                //caso a condição seja verdadeira
            }else{
                //intruções executadas, caso 
                //a condição seja falsa.
            }
    </pre>


<?php
    $media = 7;

    if($media >= 6){
        echo "O aluno foi aprovado";
    }else{
        echo "O aluno foi reprovado";
    }
?>

<br>------------------------------------<br>
10 < media >= 6 |aprovado <br>
6  < media >= 3 |exame    <br>
media < 3       |reprovado<br>
</p>
<?php
    $media = 4;

    if($media >= 6){
        echo "O aluno foi aprovado";
    }else if($media >= 3){
            echo "O aluno está de recuperação";
        }else{
            echo "O aluno foi reprovado";
        }    
?>

<p>
        O PHP faz a conversão automática de alguns tipos 
        para verdadeiro e falso.

        <strong>True</strong>
        <ul>
            <li>String com texto</li>
            <li>Número maior que 0</li>
            <li>Vetor com elementos</li>
        </ul>

        <strong>False</strong>
        <ul>
            <li>String vazia</li>
            <li>Número igual que 0</li>
            <li>Vetor vazio</li>
        </ul>
</p>
<?php
    if("O loco meu!"){
         echo "Verdadeiro";
    }else{
        echo"falso";
    }
?>

<?php
    $media = 4;

    if($media >= 6 || "Quero passar de ano"){
         echo "Huhuhu, sou esperto";
    }else{
        echo"Ihh, me dei mal";
    }
?>