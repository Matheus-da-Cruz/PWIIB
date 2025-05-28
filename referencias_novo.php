<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="salvar_usuario.php" method="post">
            <br>

            <label>id</label>
            <input name="id" type="int" class="form-control" />
            <br />
            <label>nome</label>
            <br/>
            <input type="text" name="nome"  />
            
            <br />
            <br />
            <button name="salvar_usuario" type="submit" class="btn btn-primary">
                Salvar referencias
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>