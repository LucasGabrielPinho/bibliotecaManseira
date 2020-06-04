<?php 
include "access.php";

$sql = "select * from generos";
$resultado = mysqli_query($conexao, $sql);

$listaGeneros = array();
while ($genero = mysqli_fetch_assoc($resultado)) {
    $listaGeneros[] = $genero;
}

foreach ($listaGeneros as $genero) { ?>

	<tr>
        <td><?php echo $genero['genCodigo']; ?></td>
        <td><?php echo $genero['genNome']; ?></td>
        <?php $linkExcluir = "security/excluirGenero.php?genCodigo=".$genero['genCodigo']. "&genNome=".$genero['genNome'];?>
        <?php $linkEditar =  "editarGenero.php?genCodigo=".$genero['genCodigo']. "&genNome=".$genero['genNome'];?>
        <td>
            <a class="btn btn-warning btn-block" href="<?php echo $linkEditar; ?>">Editar</a>

        </td>
        <td>
        	<a class="btn btn-danger btn-block" href="<?php echo $linkExcluir; ?>" >Excluir</a>
        </td>
    </tr>
    
<?php }?>

