<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="disciplinas_salvar.php" method="post">
            <br>

            <label>nome</label>
            <br/>
            <input type="text" name="disciplina" placeholder="Nome da disciplina"/>
            
            <br />
            <br />
            <button name="salvar" type="submit" class="btn btn-primary">
                Salvar disciplina
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>