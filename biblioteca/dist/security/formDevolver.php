<?php
    
    $livCodigo  = $_GET['livCodigo'];
    $livTitulo  = $_GET['livTitulo'];
    $livAutor   = $_GET['livAutor'];
    $genCodigo  = $_GET['genCodigo'];
    $livPaginas = $_GET['livPaginas'];
    
    

    include "access.php";

    $sql2 = "select * from generos";
    $resultado2 = mysqli_query($conexao, $sql2);
?>
<form class="modal-content" action="security/updateLivro.php?livCodigo=<?php echo $livCodigo ?>" method="POST">
    <div class="modal-header">
        <h5 class="modal-title" id="cadastrarLivroLabel">Cadastrar Livro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <input style="display: none;" value="<?php echo $livCodigo; ?>">
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Título do Livro</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="cTitulo" id="cTitulo" required="" value="<?php echo $livTitulo; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Nome Autor</label>
                    <input class="form-control py-4" id="inputFirstName" type="text" name="cAutor" id="cAutor" required="" value="<?php echo $livAutor; ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Total de Páginas</label>
                    <input class="form-control py-4" id="inputFirstName" type="number" name="cPaginas" id="cPaginas" required="" value="<?php echo $livPaginas; ?>">
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputFirstName">Genero</label>
                    <select class="form-control"  name="cGenero" id="cGenero" style="height: 51px;" required="">
                        <?php foreach($resultado2 as $genero){?>
                        <option <?php 
                            if($genero['genCodigo'] == $genCodigo){
                                echo 'selected';
                            }
                        ?> value="<?php echo $genero['genCodigo'];?>">
                            <?php echo $genero['genNome']; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal" href="livros.php">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>