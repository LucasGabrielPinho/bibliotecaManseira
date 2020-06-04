<?php 
include "access.php";

$sql = "select * from livros";
$resultado = mysqli_query($conexao, $sql);

$listaLivros = array();
while ($livro = mysqli_fetch_assoc($resultado)) {
    $listaLivros[] = $livro;
}

foreach ($listaLivros as $livro) { ?>

	<tr>
        <td id="<?php echo $livro['livCodigo']; ?>"><?php echo $livro['livCodigo']; ?></td>
        <td><?php echo $livro['livTitulo']; ?></td>
        <td><?php echo $livro['livAutor']; ?></td>
        <?php $linkExcluir = "security/excluirLivro.php?livCodigo=".$livro['livCodigo']. "&livTitulo=".$livro['livTitulo']. "&livAutor=".$livro['livAutor']. "&genCodigo=".$livro['genCodigo']. "&livPaginas=".$livro['livPaginas'];?>
        <?php $linkEditar = "editarLivro.php?livCodigo=".$livro['livCodigo']. "&livTitulo=".$livro['livTitulo']. "&livAutor=".$livro['livAutor']. "&genCodigo=".$livro['genCodigo']. "&livPaginas=".$livro['livPaginas'];?>
        <td>
            <a class="btn btn-warning btn-block" href="<?php echo $linkEditar; ?>">Editar</a>

        </td>
        <td>
        	<a href="<?php echo $linkExcluir; ?>" class="btn btn-danger btn-block">Excluir</a>
        </td>
    </tr>
    
<?php }?>

