<?php 
include "access.php";

$sql = "select * from amigos";
$resultado = mysqli_query($conexao, $sql);

$listaAmigos = array();
while ($amigo = mysqli_fetch_assoc($resultado)) {
    $listaAmigos[] = $amigo;
}

foreach ($listaAmigos as $amigo) { ?>

	<tr>
        <td><?php echo $amigo['amiNome']; ?></td>
        <td><?php echo $amigo['amiEmail']; ?></td>
        <td><?php echo $amigo['amiTelefone']; ?></td>
        <?php $linkExcluir = "security/excluirAmigo.php?amiCodigo=".$amigo['amiCodigo']. "&amiNome=".$amigo['amiNome']. "&amiEmail=".$amigo['amiEmail']. "&amiTelefone=".$amigo['amiTelefone'];?>
        <?php $linkEditar = "editarAmigo.php?amiCodigo=".$amigo['amiCodigo']. "&amiNome=".$amigo['amiNome']. "&amiEmail=".$amigo['amiEmail']. "&amiTelefone=".$amigo['amiTelefone'];?>
        <td>
           <a class="btn btn-warning btn-block" href="<?php echo $linkEditar; ?>">Editar</a>
        </td>
        <td>
        	<a href="<?php echo $linkExcluir; ?>" class="btn btn-danger btn-block">Excluir</a>
        </td>
    </tr>
    
<?php }?>

