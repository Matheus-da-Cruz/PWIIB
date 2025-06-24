<?php
    include "cabecalho.php"; 
    include "conexao.php";
    require_once 'perguntasRepository.php';
    require_once 'disciplinaRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new perguntasRepository($conexao);

    if(isset($_POST['nome']) && !empty($_POST['nome'])){
        $repo->Inserir($_POST['nome']);
    }

    if( isset($_GET['busca']) && !empty($_GET['busca']) )
    {
        $perguntas = $repo->Pesquisar( $_GET['busca'] );
    }
    else
    {
        //Chamei o metodo BuscarTodos para puxar 
        // todos usuarios do banco de dados
        $perguntas = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de perguntas</b>
            </div>
            <div class="card-body">
             <form action="perguntas.php" method="get">
                <div class="row">
                        <div class="col-4">
                            <a href="perguntas_novo.php" class="btn btn-success">
                            Nova perguntas
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
                            <th>perguntas</th>
                            <th>Disciplinas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        var_dump($perguntas);
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($perguntas as $refe) {
                                echo "<tr>
                                        <td>".$refe['ID']."</td>
                                        <td>".$refe['PERGUNTA']."</td>
                                        <td>".$refe['DISCIPLINA']."</td>
                                        <td>
                                            <a class='btn btn-danger'
                                                 href='perguntas_excluir.php?id=".$refe['ID']."'>Excluir</a>
                                            <a class='btn btn-warning'
                                                 href='perguntas_editar.php?id=".$refe['ID']."'>Editar</a>
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