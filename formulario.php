<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
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
            <li><a class="dropdown-item" href="array.php">array/vetor</a></li>
            <li><a class="dropdown-item" href="formulario.php">formulario</a></li>
          </ul>
        </li>
        
        </li>
      </ul>
      
    </div>
  </div>
</nav>



</div>

<h1> cadastro do usuario </h1>

<form action="salvar_dados.php" method="post">
<label>email</label>
<input type="text" name="login" value=""/>
<br />
<label> senha </label>
<input type="password" name="senha" value="" />
<br>
<button type="submit">
    logar
</button>
<br><br>




<h1>formulario 1</h1>
</form>

<form action="salvar_dados.php" method="get">
<label>nome</label>
<input type="text" name="nome" value=""/>
<br />
<label> idade </label>
<input type="text" name="idade" value="" />
<br />
<button type="submit">
    logar
</button>



<h1>formulario 2</h1>

<form action="salvar_dados.php" method="get">
<label>valor1</label>
<input type="number" name="n1" id="n1" value=""/>
<br />
<label> valor2 </label>
<input type="number" name="n2" id="n2" value="" />
<br />
<button type="submit">
    logar
</button>



<h1>formulario 3</h1>
</form>

<form action="salvar_dados.php" method="get">
<label>usuario</label>
<input type="text" name="usu" value=""/>
<br />
<button type="submit">
    logar
</button>


<h1>formulario 1</h1>
</form>
<h3>matheus</h3>
<form action="salvar_dados.php" method="get">
<label>nome</label>
<input type="text" name="nome" value=""/>
<br />
<h3>123</h3>
<label> idade </label>
<input type="text" name="idade" value="" />
<br />
<button type="submit">
    logar
</button>

    <?php




    ?> 
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>