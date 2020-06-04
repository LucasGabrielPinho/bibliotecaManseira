<?php
    
    $amiCodigo      = $_GET['amiCodigo'];
    $amiNome        = $_GET['amiNome'];
    $amiEmail       = $_GET['amiEmail'];
    $amiTelefone    = $_GET['amiTelefone'];
    
    

    include "access.php";

    $sql = "select * from amigos";
    $resultado2 = mysqli_query($conexao, $sql);
?>
<form class="modal-content" action="security/updateAmigo.php?amiCodigo=<?php echo $amiCodigo ?>" method="POST">
    <div class="modal-header">
        <h5 class="modal-title" id="cadastrarLivroLabel">Editar Amigo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <input style="display: none;" value="<?php echo $amiCodigo; ?>">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Nome</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="cNome" id="cNome" required="" value="<?php echo $amiNome; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Telefone</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="cTelefone" id="cTelefone" required="" value="<?php echo $amiTelefone; ?>">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Email</label>
                    <input class="form-control py-4" id="inputFirstName" type="email" name="cEmail" id="cEmail" required="" value="<?php echo $amiEmail; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="amigos.php">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>