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

<h1> variavel </h1>

<p> 
A declaração de variáveis em PHP é feita utilizando o símbolo de cifrão ($) antes do nome da variável. O nome da variável deve começar com uma letra ou um underscore (_), seguido por letras, números ou underscores. As variáveis em PHP são dinâmicas, ou seja, não é necessário declarar o tipo da variável antes de usá-la. O valor da variável pode ser alterado ao longo da execução do código.
</p>

<div class="container">

<pre>
      $nome = "João";  // variável do tipo string
      $idade = 25;     // variável do tipo inteiro
      $altura = 1.75;   // variável do tipo float
  </pre>

<!-- fecha container -->

</div>

<h1>Constantes</h1>
<p>
Em PHP, constantes são valores fixos que não podem ser alterados durante a execução do programa. Elas são declaradas com a palavra-chave define() ou usando a palavra-chave const (para constantes definidas em classes ou escopos específicos).

A principal diferença entre constantes e variáveis é que, enquanto as variáveis podem ter seu valor alterado, as constantes mantêm o mesmo valor durante todo o script. Constantes podem ser usadas em qualquer lugar do código e não precisam do símbolo de cifrão ($).

<br />
Exemplo de declaração de constante:
</p>
 
    <pre>
 
     define("PI", 3.14);  // Usando define()
     echo PI;  // Imprime 3.14

     const URL = "https://www.exemplo.com";  // Usando const
     echo URL;  // Imprime https://www.exemplo.com

    </pre>
<?php
  define("PI",3.14);
  echo PI;
  echo "<br>";

  const coordenador = "Faberson";
  echo "<br>";
  echo coordenador;

?>

<h1>Exercícios</h1>

<ol>
  <li>Crie 3 variaveis, atribua valor e some os valores.  Imprima na tela </li>
  <li>Crie 2 variaveis, atribua valor e multiplique os valores. Imprima na tela</li>
  <li>Crie 3 variáveis, uma para descrição de produto e outras duas para quantidade em estoque e valor de venda, 
    imprima na tela as informações cocatenadas.
  </li>
  <li>
    Crie uma variável boleana, atribua true ou false e imprima na tela
  </li>
  
</ol>

<?php
        $nome = "matheus";
        $idade = 17;
        $peso = 60.500;
        $altura = 1.70;
        $isprof = false;

        $cedula = 2;
        $pix = 2;
        $roubo = 2;

        $roblox = 2;
        $minecraft = 4;

        $pasta;
        $estoque;

        echo "exercicio 1" ;
        echo "<br>";
        echo $pix + $roubo + $cedula;

        echo"<br>";

        echo"exercicio 2";
        echo"<br>";
        echo $roblox * $minecraft;

        echo"br"

        echo"exercicio 3";
        echo"<br>";
        echo $roblox * $minecraft;



?> 

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>