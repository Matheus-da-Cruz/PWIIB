<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="bootstrap.min.css">
<style>

</style>



</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         
        
       
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            php
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="variavel.php">variavel</a></li>
            <li><a class="dropdown-item" href="if.php">if</a></li>
            <li><a class="dropdown-item" href="while.php">while</a></li>
            <li><a class="dropdown-item" href="for.php">for</a></li>
            <li><a class="dropdown-item" href="switch.php">switch</a></li>
            <li><a class="dropdown-item" href="arraT.PHP">array/vetor</a></li>
          </ul>
        </li>
        
        </li>
      </ul>
      
    </div>
  </div>
</nav>



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

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>