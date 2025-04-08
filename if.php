<?php include "cabecalho.php";?>



</div>

<h2>Estrutura de deciçao</h2>
<pre>
$numero =2;
if($numero == 1){
    echo"verdadeiro: $numero igual a 1";
}else{
    echo"false: $numero é diferente de 1";
}
</pre>

    <?php
$numero =2;
if($numero == 1){
    echo"verdadeiro: $numero igual a 1";
}else{
    echo"false: $numero é diferente de 1";
}

    ?> 

    <h2>estrutura de decisao encadeada</h2>
    <pre>
    $nome = "fernando";
if($nome == "joao"){

}else if($nome == "maria"){

}else if($nome == "fernando"){

}else if($nome == "pedro"){

}else{
    echo "nenhum nome é igual ao conteudo da variavel";
}
</pre>

<?php
$nome = "fernando";
if($nome == "joao"){

}else if($nome == "maria"){

}else if($nome == "fernando"){

}else if($nome == "pedro"){

}else{
    echo "nenhum nome é igual ao conteudo da variavel";
}
?>

<h2>Varios teste em um if</h2>
<pre>$numero =35;
if($numero2 >10 && $numero2 <50)
{
    echo"$numero2 esta entre 10 e 50";
}    
</pre>

<h2>errado</h2>

<pre>$numero =35;
if($numero2 >10 && $numero2 <50)
{
    echo"$numero2 esta entre 10 e 50";
}    

//      false       true 
if($numero2 > 36 && $numero2 <50 )
{
    //esse codigo nao sera executado
}else{
    echo"numero2 nao esta entre 36  e 50";
}
</pre>


<?php
$numero2 = 36;
if($numero2 >10 && $numero2 <50)
{
    echo"$numero2 esta entre 10 e 50";
}    
?>    

<h2>Conectivo ou (or)</H2>

<pre>
$telefone = "14998729070";
if($tell == "14998729070" || $tell == "141575958"){
    echo "Aqui um dos telefone é igual a variavel";
}
</pre>

<?php include "rodape.php"; ?>