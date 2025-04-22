<?php 

include "cabecalho.php";
include "conexao.php";
require_once 'UsuarioRepository.php';


//include o arquivo da classe repository do usuario 
$repo = new UsuarioRepository($conexao);

//crio um objeto do tipo UsuarioRepository chamado repo 
//E  recebe a conexap como parametro 
$usuarios = $repo->buscarTodos();

//Chamei o metodo BusTodos para puxar 
// todos usuarios do banco de dados 
$usuarios = $repo ->buscarTodos();

?>

 <div class = "row">
        <div class= "col-12">
            <br>
            <div class= "card">
                <b>lista de usuarios </b>
                <div class= "card-header">

                        <div class= "card-body">
        
                    <div class= "row">
                    <div class= "col-4">
                        <a class= "btn btn-success">
                        novo usuario
                        </a>
                        </div>

                        <div class= "col-4">
                            <input name= "nusca" class= "form-control" />
                        </div>
                        <div class= "col-4">
                        <button type= "submit" class="btn btn-primary">
                            Pesquisar
                        </button>
                        </div>
                            <div class= "row">
                        <table class= "table table-striped"> 
                            <thead>
                             <tr>
                                 <th>id </th>
                                 <th>login </th>
                                 <th>ativo </th>
                                 <th> </th>

                            <thead>
                            <tbody>
                                <?php

                                  //foreach serve para ler todos os usuarios 
                                //vindo do banco em formato de array chave valor 
                                foreach ($usuarios as $item){ 
                               echo "<tr>

                                      <td>$item[ID]</td>
                                      <td>$item[LOGIN]</td>
                                      <td>$item[ATIVO]</td>
                                      <td></td>
                                        
                               

                             </tr>";
                        }                 

                                ?>

                                <tbody>
                            </table>
                         </div>
                    </div>
                 </div>
             
            </div>
        </div>
        </div>
    </div>
</div> 


<?php

include "rodape.php"; 

?>