<?php include "cabecalho.php";
      include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4" >
        <form action="salvar_usuario.php" method="post">
                <br/>
                <label>login</label>
                <input name="login" type="text" class="form-control">
                <br/>

                <label>senha</label>
                <input name="senha" type="password" class="form-control">
                <br/>
                <input type="checkbox" name="ativo" value="1" /> 
                usuario ativo
                <br/>
                <br/>
                <button name= "salvar_usuario" type="submit" class="btn btn-primary">
                
                salvar usuario
                </button>
        </form>    
    </div>
</div>




<?php include "rodape.php"; ?>