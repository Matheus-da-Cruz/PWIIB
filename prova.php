<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="bootstrap.min.css">
<style>
.grid-container {
  display: gid;
  grid-template-columns:  1fr 3fr ;
 
  background-color: none;

  
}
.grid-container > div {
    display: center;
  background-color: none;
  color: black;
  padding: 10px;
  font-size: 30px;
  text-align: center;
}

.item2{
    background-color:blue;


}

button {
    background-color: orange;
}

label{
    color: orange;
}
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
            <li><a class="dropdown-item" href="prova.php">prova</a></li>
          </ul>
        </li>
        
        </li>
      </ul>
      
    </div>
  </div>
</nav>



</div>
<div class="container text-center col-md-5">
 <div class="item1"><div>


  <div class="item2">

  <img src=".\img\defesa-civil-brasil.png" alt="" width="460" height="305">
      
  <form action="salvar_dados.php" method="post">
<label>digite seu login</label>
<br>
<input type="text" name="login" value=""/>
<br />
<label> digite sua senha </label>
<br>
<input type="password" name="senha" value="" />
<br>

<button type="submit">
    Entrar
</button></div>


<div><div>
 
</div>

    <?php


    ?> 
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>