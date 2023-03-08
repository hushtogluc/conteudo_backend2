<style>
.grid{
   display: grid;
   grid-template-rows: auto auto;
   grid-template-columns: auto auto auto auto auto;
   gap: 10px;
}
</style>

<h2>Estrutura de repetição - for</h2>
<p>
  Utilizada para repetir um conjunto de instruções por um
  número determinado de vezes.
</p>
<strong>Exemplo</strong>
<pre>
  for(inicio, condição, passo){
      //comandos a serem repetidos.
  }
</pre>



<div class="grid">
  <?php
      for($tabuada = 1; $tabuada <= 10; $tabuada++){
          echo "<div class='tabuada'>";
              for($contador = 0; $contador <= 10; $contador++){
                  $resultado = $tabuada * $contador;
                  echo "$tabuada x $contador = $resultado<br>";
              }
          echo "</div>";
      }
  ?>
</div>