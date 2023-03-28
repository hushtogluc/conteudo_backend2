<h1>Request Method : GET</h1>

<?php

    var_dump($_GET);
    $conta=($_GET["n1"]+$_GET["n2"]);
    echo ($conta);
    //endereço web precisa colocar interrogação"?" + nome de variável + valor
?>