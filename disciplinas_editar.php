<?php 
include "conexao.php";
require_once "UsuarioRepository.php";
include "cabecalho.php";
if(isset($_GET['id']) && !empty($_GET['id']) )
{
    $repo = new UsuarioRepository($conexao);
    $usuario = $repo->buscarPorId($_GET['id']);
}
else
{
    header('location: usuarios.php');
}
?>
<br />
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <div class="card-header">Editar Usuário</div>
            <div class="card-body">
                <form action="salvar_edicao_usuario.php" method="post">
                    <label>Id</label>
                    <input type="text"
                            value="<?php echo $usuario['ID'] ?>"
                            class="form-control"
                            name="ID"
                            readonly 
                             />
                    <br />
                    <label>Login</label>
                    <input type="text"
                            value="<?php echo $usuario['LOGIN'] ?>"
                            class="form-control"
                            name="LOGIN"
                             />
                    <br />
                    <label>Ativo</label>
                    <select name="ATIVO" class='form-control'>
                        <?php 
                            if($usuario["ATIVO"])
                            {
                                ?>
                                    <option value="1" selected >Ativado</option>
                                    <option value="0">Desativado</option>
                                <?php
                            }else{
                                ?>
                                    <option value="1">Ativado</option>
                                    <option value="0" selected>Desativado</option>
                                <?php
                            }
                        ?>
                    </select>
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
