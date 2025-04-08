<?php include "cabecalho.php";?>
 
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

 <h1> sorteio </h1>

 <?php
  $sorteio = array();
  
  for ($i = 0 ; $i < 15; $i++) {
      echo "<h2>rodada".($i+1). "numero sorteado é: $sorteio[$i] </h2> ";

  };

?>



<?php include "rodape.php"; ?>