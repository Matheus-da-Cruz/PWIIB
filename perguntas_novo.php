<?php   
    include "cabecalho.php"; 
    include "conexao.php";

    
    require_once 'disciplinaRepository.php';
    $repo = new disciplinaRepository($conexao);
?>
<div class="row">
    <div class="col-6 offset-3">
        <div class="card mt-3">
            <div class="card-header">
                Cadastro de perguntas
            </div>
            <div class="card-body">
                <form action="./perguntas_salvar.php" method="post">
                        
                    <label>Pergunta</label>
                    <textarea name="PERGUNTA" class="form-control"></textarea>
                    <br/>
                    <label>Disciplina</label>
                    <select name="id_disciplina" class="form-control" >
                        <?php


                            foreach ($repo->buscarTodos() as $item  ) {
                                echo "<option value='$item[ID]'> $item[DISCIPLINA] </option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button name="salvar_pergunta" type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </form>
                </div>
        </div>
    </div>
</div>

<?php include "rodape.php";  
 ?>
