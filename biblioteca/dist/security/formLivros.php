<?php
    include "access.php";

    $sql2 = "select * from generos";
    $resultado2 = mysqli_query($conexao, $sql2);
?>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Título do Livro</label>
            <input class="form-control py-4" id="inputFirstName" type="text" name="cTitulo" id="cTitulo" required="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Nome Autor</label>
            <input class="form-control py-4" id="inputFirstName" type="text" name="cAutor" id="cAutor" required="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Total de Páginas</label>
            <input class="form-control py-4" id="inputFirstName" type="number" name="cPaginas" id="cPaginas" required="">
        </div>
    </div>
 
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Genero</label>
            <select class="form-control"  name="cGenero" id="cGenero" style="height: 51px;" required="">
                 <?php foreach($resultado2 as $genero){?>
                    <option value="<?php echo $genero['genCodigo']; ?>">
                        <?php echo $genero['genNome']; ?>    
                    </option>
                <?php } ?>
           </select>
        </div>
    </div>
</div>
