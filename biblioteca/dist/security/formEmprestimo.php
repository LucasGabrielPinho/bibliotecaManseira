<?php
    include "access.php";

    $titulo = "";
    $etiqueta = "";
    $msgConfirma = "";

    $sql_livros = "select * from livros order by livTitulo";
    $resultado_livros = mysqli_query($conexao, $sql_livros);

    $sql_amigos = "select * from amigos order by amiNome";
    $resultado_amigos = mysqli_query($conexao, $sql_amigos);
?>

<div class="form-row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Data do Empréstimo</label>
            <input class="form-control py-4" id="inputFirstName" type="date" name="cDataEmp" id="cDataEmp">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Livro</label>
            <select class="form-control"  name="cCodLivro" id="cCodLivro" style="height: 51px;">
               <?php foreach($resultado_livros as $livro) {?>
                    <option value="<?php echo $livro['livCodigo']; ?>" >
                        <?php echo $livro['livTitulo']; ?>
                    </option>
               <?php } ?>
           </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label class="small mb-1" for="inputFirstName">Emprestar para</label>
            <select class="form-control"  name="cCodAmigo" id="cCodAmigo" style="height: 51px;">
                <?php foreach($resultado_amigos as $amigo) {?>
                    <option value="<?php echo $amigo['amiCodigo']; ?>">
                        <?php echo $amigo['amiNome']; ?>
                    </option>
                <?php } ?>
           </select>
        </div>
    </div>
</div>
