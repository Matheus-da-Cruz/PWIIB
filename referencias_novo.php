<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="referencias_salvar.php" method="post">
            <br>

            <label>nome</label>
            <br/>
            <input type="text" name="nome" placeholder="Nome da referênica"/>
            
            <br />
            <br />
            <button name="salvar" type="submit" class="btn btn-primary">
                Salvar referencias
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>