<?php
    include "cabecalho.php"; 
    include "conexao.php";

    //Inclui o arquivo da classe Repository do usuário
    require_once 'disciplinaRepository.php';

    //Crio um objeto do tipo UsuarioRepository chamado repo
    //E recebe a conexão como parametro
    $repo = new UsuarioRepository($conexao);

    //Chamei o metodo BuscarTodos para puxar 
    // todos usuarios do banco de dados
    //$usuarios = $repo->buscarTodos();


    if(isset ($_GET['busca']) && !empty($_GET['busca']))
    {
        $disciplina = $repo->Pesquisar($_GET['busca']);
    }
    else
    {
        $disciplina = $repo->buscarTodos();
    }
    

?>
<div class="row">
    <div class="col-12">
        <br />
        <div class="card">
            <div class="card-header">
                <b>Lista de disciplina</b>
            </div>
            <div class="card-body">
            <form action="disciplina.php" method="get">
              <div class="row">
                    <div class="col-4">
                        <a href="nova.disciplina.php" class="btn btn-success">
                            Nova_disciplina
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
                            <th>Login</th>
                            <th>Ativo</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //foreach serve para ler todos os usuarios 
                            // vindos do banco em formato de array chave valor
                            foreach ($disciplina as $dis) {
                                echo "<tr>
                                        <td>$dis[ID]</td>
                                        <td>$dis[LOGIN]</td>
                                        <td>$dis[ATIVO]</td>
                                        <td>
                                           <a class='btn btn-danger' href='excluir_usuario.php?id=".$dis['ID']."'>excluir</a>
                                            <a class='btn btn-warning' href='editar_usuario.php?id=".$dis['ID']."'>editar</a>
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