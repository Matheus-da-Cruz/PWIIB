<?php 
include "conexao.php";
require_once "perguntasRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new perguntasRepository($conexao);
    $perguntas = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: perguntas.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar pergunta</div>
            <div class="card-body">
                <form action="perguntas_editar_salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $perguntas['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>pergunta</label>
                    <input type="text"
                            value="<?php echo $perguntas['NOME'] ?>"
                            class="form-control"
                            name="NOME"
                             />
                    <br />


                    <br />
                    <button class="btn btn-primary" type="submit">
                            Salvar pergunta
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>