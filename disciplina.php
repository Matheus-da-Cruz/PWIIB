<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'disciplinaRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new disciplinaRepository($conexao);

    if(isset($_POST['disciplina']) && !empty($_POST['disciplina'])){
        $repo->Inserir($_POST['disciplina']);
    }

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $disciplinas = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $disciplinas = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de disciplinas</b>
            </div>
            <div class="card-body">
             <form action="disciplina.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="disciplina_novo.php" class="btn btn-success">
                            Nova disciplinas
                            </a>
                        </div>
                        <div class="col-4">
                            <input name="busca" class="form-control" />
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Pesquisar
                            </button>
                        </div>
                </div>
            </form>   

              <div class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>disciplina</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($disciplinas as $disc) {
                                echo "<tr>
                                        <td>".$disc['ID']."</td>
                                        <td>".$disc['DISCIPLINA']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='disciplinas_excluir.php?id=".$disc['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='disciplinas_editar.php?id=".$disc['ID']."'>Editar</a>
                                        </td> 
                                      </tr>";
                            }
                        ?>
                    </tbody>
                </table>
              </div>
            </div>
        </div>

    </div>
</div>



<?php

include "rodape.php";  
?>