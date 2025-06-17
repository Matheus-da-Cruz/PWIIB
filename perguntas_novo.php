<?php   
    include "cabecalho.php";
    include "conexao.php";
?>
<div class="row">
    <div class="col-4 offset-4">
        <form action="perguntas_salvar.php" method="post">
            <br>

            <label>Pergunta</label>
            <br/>
            <input type="text" name="nome" placeholder="Adicionar pergunta"/>
            
            <br />
            <br />
            <button name="salvar" type="submit" class="btn btn-primary">
                Salvar pergunta
            </button>
        </form>
    </div>
</div>


<?php include "rodape.php"; ?>