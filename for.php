<?php include "cabecalho.php";?>
<h1>For</h1>
<p> 
    for é estrutura de repetiçao. existem 3 configuraçoes para a estrutura de repetiçao funcionar
    <ol>
        <li> variavel de controle</li>
        <li>condiçao de finalizaçao</li>
        <li>incremento de variavel de controle </li>
    <ol>
        <pre>
            <?php
            for($i = 0; $i < 1000;$i++){
                echo "indice $i <br>";
            }

            ?>
            </pre>

  
 <?php include "rodape.php"; ?>