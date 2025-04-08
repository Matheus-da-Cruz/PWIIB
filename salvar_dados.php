<?php
//test
    echo $_GET["nome"];
    echo "<br/>";
    echo $_GET["idade"];


//exercicio 1
    echo $_POST["login"];
    echo "<br/>";
    echo $_POST["senha"];


//exercicio 2
    $v1= $_GET["n1"];
    echo "<br/>";
    $v2=$_GET["n2"];

    $soma = $v1 + $v2;
    echo "a soma $v1 + $v2 = $soma";
    echo "<br/>";


//exercicio 3
    $oi = $_GET["usu"];
    echo "ola, $oi";
    echo "<br/>";

//exercicio 4



?>


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
