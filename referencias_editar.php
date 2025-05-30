<?php 
include "conexao.php";
require_once "referenciasRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new referenciasRepository($conexao);
    $referencias = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: referencias.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Usuário</div>
            <div class="card-body">
                <form action="referencias_editar_salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $referencias['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>nome</label>
                    <input type="text"
                            value="<?php echo $referencias['NOME'] ?>"
                            class="form-control"
                            name="NOME"
                             />
                    <br />


                    <br />
                    <button class="btn btn-primary" type="submit">
                            Salvar Usuário
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php include "rodape.php"; ?>
