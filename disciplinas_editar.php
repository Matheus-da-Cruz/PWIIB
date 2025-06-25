<?php 
include "conexao.php";
require_once "disciplinaRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new disciplinaRepository($conexao);
    $disciplinas = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: disciplina.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar disciplinas</div>
            <div class="card-body">
                <form action="disciplinas_editar_salvar.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $disciplinas['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>nome</label>
                    <input type="text"
                            value="<?php echo $disciplinas['DISCIPLINA'] ?>"
                            class="form-control"
                            name="DISCIPLINA"
                             />
                    <br />


                    <br />
                    <button class="btn btn-primary" type="submit">
                            Salvar disciplinas
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
