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
            <li><a class="dropdown-item" href="array.php">array/vetor</a></li>
          </ul>
        </li>
        
        </li>
      </ul>
      
    </div>
  </div>
  </nav>
 
 <h1>Array</h1>
 <p>
 São variaveis que podem guardar uma lista de valores 
 identificados por indice ou chave.
 </p>
 <pre>
   $frutas = ["banana", "Maçã" , "Abacaxi", "mamão", 10, true, array(), [] ];
   //ou 
   $frutas = array("banana", "Maçã" , "Abacaxi", "mamão");
 </pre>
 <?php           //0       1         2         3
   $frutas = ["banana", "Maçã" , "Abacaxi", "mamão" ];
   echo "<br>$frutas[2]";
 
   for($i = 0; $i < count($frutas); $i++ )
   {
       echo "<br> $frutas[$i]";
   }
 
   array_push($frutas,"Limão");
 
   array_push($frutas, rand(1,75) );
 
   for($i = 0; $i < count($frutas); $i++ )
   {
       echo "<br> $frutas[$i]";
   }
 
 
   $b = array( rand(1,15), rand(1,15), rand(1,15), rand(1,15), rand(1,15) );
   
   $i = [];
   for($j = 0; $j<5; $j++){
     $i[$j] = rand(16,30); 
   }
 
   $n = [];
   for($j = 0; $j<5; $j++){
     $n[$j] = rand(31,45); 
   }
 
   $g = array();
   for($j = 0; $j<5; $j++){
     $g[$j] = rand(46,60); 
   }
 
   $o = array();
 
   for($j = 0; $j<5; $j++){
     $o[$j] = rand(61,75); 
   }
 ?>
 
 
 
 
 <style>
   table, tr, td{
     border: 1px solid;
     font-size:100px;
     padding:20px;
   }
 
   </style>
 
 
 <table border="5">
     <tr>
       <td>B</td>
       <td>I</td>
       <td>N</td>
       <td>G</td>
       <td>O</td>
     </tr>
     <?php
       for($ifor=0; $ifor < 5; $ifor++)
       {
         echo "<tr>";
         echo "<td>$b[$ifor]</td>";  
         echo "<td>$i[$ifor]</td>";
         echo "<td>$n[$ifor]</td>";
         echo "<td>$g[$ifor]</td>";
         echo "<td>$o[$ifor]</td>";
         echo "</tr>";
       }
     ?>
 
 </table>

<script src="bootstrap.bundle.min.js"></script>
</body>
</html>